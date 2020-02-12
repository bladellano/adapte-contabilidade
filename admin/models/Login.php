<?php 

session_start();

require_once "Conexao.php";

class Login extends Conexao {

	public function getIdUsuario($dados){

		$sql  = "SELECT * FROM tb_usuarios  WHERE email = ? AND password = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->execute([$dados[0],$dados[1]]);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);  

		$count = $stmt->rowCount();//Qtd de registro

		if($count > 0){

			$_SESSION['Usuario']['email']     = $dados[0];
			$_SESSION['Usuario']['email']     = $dados[0];
			$_SESSION['Usuario']['idUsuario'] = $result['idUsuario'];
			$_SESSION['Usuario']['nome']      = $result['nome'];
			$_SESSION['Usuario']['sobrenome'] = $result['sobrenome'];
			$_SESSION['Usuario']['username']  = $result['username'];
			$_SESSION['Usuario']['status']    = $result['status'];

			return $count;

		} else {

			return 0;
		}
	}

}