<?php namespace osmanager\Http\Controllers;

use osmanager\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use osmanager\Http\Requests\OsRequest;
use osmanager\Os;
use osmanager\Categoria;

class OsController extends Controller {

	public function __construct(){
		$this->middleware('auth', ['except'=>['lista']]);
	}

	public function index(){
		return view('home');
	}

	public function formNovo(){
		$tipos = array('pf'=>'Pessoa Física', 'pj'=>'Pessoa Jurídica');
		return view('os.cadastra')->with(['categorias' => Categoria::all(), 'tipos' => $tipos]);
	}

	public function cadastra(OsRequest $osRequest){
		$params = $osRequest->all();
		list($cpf, $cnpj) = array('', '');
		
		if($params['tipo'] == 'pj'){
			$cliente = new PjurController($params);
			$cnpj = $cliente->getCnpj();
		}else{
			$cliente = new PfisController($params);
			$cpf = $cliente->getCpf();
		}

		$pago = isset($params['pago']) ? 1 : 0;

		Os::create(['nome'=>$cliente->getNome(), 'email'=>$cliente->getEmail(), 'descricao'=>$params['descricao'],
			'preco'=>$params['preco'], 'pago'=>$pago, 'categoria_id'=>$params['categoria_id'],
			'imposto'=>$cliente->calculaImposto(), 'cnpj'=>$cnpj, 'cpf'=>$cpf, 'tipo' => $params['tipo'],
			'_token'=>$params['_token']]);

		return redirect()->action('OsController@formNovo')->withInput(Request::only('nome'));
	}

	public function lista(){
		return view('os.lista')->with('osarray', Os::all());
	}

	public function remove(){
		$os = Os::find(Request::input('id'));
		$nome = $os->nome;
		$os->delete();
		return redirect()->action('OsController@lista')->withInput(['nome'=>$nome]);
	}

	public function formAltera($id){
		$tipos = array('pf'=>'Pessoa Física', 'pj'=>'Pessoa Jurídica');
		return view('os.edita')->with(['os'=>Os::find($id), 'tipos'=>$tipos, 'categorias'=>Categoria::all()]);
	}

	public function edita(OsRequest $osRequest){
		$params = $osRequest->all();
		list($cpf, $cnpj) = array('', '');

		if($params['tipo'] == 'pj'){
			$cliente = new PjurController($params);
			$cnpj = $cliente->getCnpj();
		}else{
			$cliente = new PfisController($params);
			$cpf = $cliente->getCpf();
		}

		$pago = isset($params['pago']) ? 1 : 0;

		Os::where('id', '=', $params['id'])->update(['nome'=>$cliente->getNome(), 'email'=>$cliente->getEmail(),
			'descricao'=>$params['descricao'], 'preco'=>$params['preco'], 'pago'=>$pago, 'categoria_id'=>$params['categoria_id'],
			'imposto'=>$cliente->calculaImposto(), 'cnpj'=>$cnpj, 'cpf'=>$cpf, 'tipo' => $params['tipo']]);

		return redirect()->action('OsController@lista');
	}
}
