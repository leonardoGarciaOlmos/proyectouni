<?php
	/**
		@author Daniel Castillo & Jhoynerk Caraballo
	*/
	class User extends MY_Model{
		protected $id;
		protected $name;
		protected $last_name;
		protected $login;
		protected $password;
		protected $password_s; // para pruebas
		protected $email;
		protected $sex;
		protected $date_birth;
		protected $specialization;
		protected $status;
		private $roles;

		public function __construct(){
			parent::__construct( );
		}

		public function load( $ids )
		{
			return $this->duser->getUserById( $ids );
		}

		public function loadAll( $where = '' )
		{
			return $this->duser->getAll( $where );
		}

		public function delete()
		{
			if ($this->duser->delete( $this->id )){
				$this->reset();
				return true;
			}
			return false;
		}

		public function status_Delete(){
			return $this->duser->setState();
		}

		public function loadRoles( )
		{
			$this->roles = $this->duser->getRoles( $this->id );
			if (count($this->roles)>0){
				return true;
			}
			return false;
		}

		public function getRoles(){
			return $this->roles;
		}

		public function getRol( $systemId )
		{
			if (count($this->roles)>0){
				foreach ($this->roles as $key => $value) {
					if ($systemId == $value['system_id']){
						return $this->roles[$key];
					}
				}
			}
			return false;
		}

		public function setRoles( $roles )
		{
			$aux = array();
			$cont = 0;
			foreach ($roles as $key => $value){
				$aux[$cont]['user_id']   = $this->id;
				$aux[$cont++]['role_id'] = $value['role_id'];
			}
			$this->roles = $aux;
		}

		public function save( ){
			return $this->duser->insert();
		}

		public function saveRoles(){
			if(count($this->roles)>0){
				return $this->duser->insertRoles( $this->roles );
			}
			return false;
		}
	}
