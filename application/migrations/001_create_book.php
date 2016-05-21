<?php
class Migration_Create_Book extends CI_Migration {

  public function up(){
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'title' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
        'null' => TRUE,
      ),
      'description' => array(
        'type' => 'TEXT',
        'null' => TRUE,
      ),
      'pages' => array(
        'type' => 'INT',
        'constraint' => 4,
        'null' => TRUE,
      ),
      'authors' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
        'null' => TRUE,
      ),
      'publisher' => array(
        'type' => 'VARCHAR',
        'constraint' => '100',
        'null' => TRUE,
      ),
      'cover' => array(
        'type' => 'VARCHAR',
        'constraint' => '255',
        'null' => TRUE,
      ),
      'user_id' => array(
        'type' => 'INT',
        'constraint' => 5,
      ),
    ));
    
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('books');
  }

  public function down(){
		$this->dbforge->drop_table('books');
	}
}
?>
