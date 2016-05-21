<?php
class Migration_Create_User extends CI_Migration {

  public function up(){
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'email' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'password' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
      'name' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
      ),
    ));
    
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('users');
  }

  public function down(){
		$this->dbforge->drop_table('users');
	}
}
?>
