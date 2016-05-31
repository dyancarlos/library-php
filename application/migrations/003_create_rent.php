<?php
class Migration_Create_Rent extends CI_Migration {

  public function up(){
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE,
      ),
      'date' => array(
        'type' => 'DATETIME',
      ),
      'due_date' => array(
        'type' => 'VARCHAR',
        'constraint' => "10",
      ),
      'book_id' => array(
        'type' => 'INT',
        'constraint' => 5,
      ),
      'user_id' => array(
        'type' => 'INT',
        'constraint' => 5,
      ),
    ));
    
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('rents');
  }

  public function down(){
		$this->dbforge->drop_table('rents');
	}
}
?>
