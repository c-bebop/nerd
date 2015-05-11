<?php

class Talk_Model extends Model {

   public function __construct(){
      parent::__construct();
   }

   /**
   * Gibt die letzten 20 Einträge im Archiv zurück.
   * @return array Liste aus Produkten mit id, timestamp, name, url, image und price
   */
   public function all() {
      return $this->_db->select('SELECT * FROM talks ORDER BY votes DESC LIMIT 0, 50');
   }

   public function insert($table, $data) {
      $this->_db->insert($table, $data);
   }

   public function delete_talk($id) {
      return $this->_db->delete('talks', 'id = ' . $id);
   }

   /**
    * This method returns the Talk, given by the transfered parameter id,
    * simply done by the following MySQL request:
    *
    * SELECT * FROM talks WHERE id = <id>
    *
    * @param      $id      integer     The id of the talk which shall be
    *                                  returned.
    * @return     mixed                The Talk specified by the id.
    */
   public function get_talk($id) {
      $test_array = array(':id' => $id);
      $result = $this->_db->select('SELECT * FROM talks WHERE id = :id', $test_array);
      return $result[0];
   }

   /**
    * This method searches for the transfered pattern in the MySQL DB with
    * simple MySQL search request es follows:
    *
    * SELECT * FROM talks WHERE (title LIKE <pattern> OR description LIKE
    *    <pattern> OR host LIKE <pattern>)
    *
    * This could definitly be optimised but it suffices for now.
    *
    * @param      $pattern    string      pattern (search word) that should be
    *                                     searched.
    * @return     array                   An array of Talks that fit the pattern.
    * @author     Florian Willich
    */
   public function search($pattern) {
      return $this->_db->select('SELECT * FROM talks WHERE (title LIKE \'%' . $pattern . '%\' OR description LIKE \'%' . $pattern . '%\' OR host LIKE \'%' . $pattern . '%\')');
   }

   public function update_talk($data) {
      $this->_db->update('talks', $data, 'id = :id');
   }

   public function increase($id) {
      $stmt = $this->_db->prepare('UPDATE talks SET votes = votes+1 WHERE id = :id');
      $test_array = array(':id' => $id);
      return $stmt->execute($test_array);
   }

}