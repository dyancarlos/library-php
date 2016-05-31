<?php
class Migration_Create_Invite extends CI_Migration {

  public function up(){
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE,
      ),
      'email' => array(
        'type' => 'VARCHAR',
        'constraint' => "50",
      ),
      'user_id' => array(
        'type' => 'INT',
        'constraint' => 5,
      ),
    ));
    
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('invites');
  }

  public function down(){
		$this->dbforge->drop_table('invites');
	}
}
?>
