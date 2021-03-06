<?php 

	namespace database\modules;

	use database\crud\RPossibleresult;

	/**
	*  
	*	RPossibleresultInfo
	*  
	* Provides High level features for interacting with the RPossibleresult;
	*
	* This source code is auto-generated
    *
    * @author Victor Mwenda
    * Email : vmwenda.vm@gmail.com
    * Phone : +254(0)718034449
	*/
	class RPossibleresultInfo{

	private $build;
	private $client;
	private $action;
	private $r_possibleresult;
	private $table = 'r_possibleresult';
	/**
	 * RPossibleresultInfo
	 * 
	 * Class to get all the r_possibleresult Information from the r_possibleresult table 
	 * @param String $action
	 * @param String $client
	 * @param String $build
	 * 
	 * @author Victor Mwenda
	 * Email : vmwenda.vm@gmail.com
	 * Phone : +254718034449
	 */
	public function __construct($action = "query", $client = "mobile-android",$build="user-build") {

		$this->client = $client;
		$this->action = $action;
		$this->build = $build;
		
		$this->r_possibleresult = new RPossibleresult( $action, $client );

	}

	

		/**
	* Inserts data into the table[r_possibleresult] in the order below
	* array ('id','scheme_id','scheme_sub_group','response')
	* is mappped into 
	* array ($id,$scheme_id,$scheme_sub_group,$response)
	* @return 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert($id,$scheme_id,$scheme_sub_group,$response,$redundancy_check= false, $printSQL = false) {
		$columns = array('id','scheme_id','scheme_sub_group','response');
		$records = array($id,$scheme_id,$scheme_sub_group,$response);
		return $this->r_possibleresult->insert_prepared_records($id,$scheme_id,$scheme_sub_group,$response,$redundancy_check,$printSQL );
	}


 	/**
     * @param $distinct
     * @param string $extraSQL
     * @return string
     */
	public function query($distinct,$extraSQL=""){

		$columns = $records = array ();
		$queried_r_possibleresult = $this->r_possibleresult->fetch_assoc_in_r_possibleresult ($distinct, $columns, $records,$extraSQL );

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_r_possibleresult);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_r_possibleresult);
		}
	}
/**
     * Inserts records in a relation
     * The records are inserted in the relation columns in the order they are arranged in the array
     *
     * @param $records
     * @param bool $printSQL
     * @return bool|mysqli_result
     * @throws NullabilityException
     */
    public function insert_raw($records, $printSQL = false)
    {
        return $this->r_possibleresult->insert_raw($records, $printSQL);
    }

    /**
     * Inserts records in a relation
     * The records are matched alongside the columns in the relation
         * @param array $columns
         * @param array $records
         * @param bool $redundancy_check
         * @param bool $printSQL
         * @return mixed
         */
        public function insert_records_to_r_possibleresult(Array $columns, Array $records,$redundancy_check = false, $printSQL = false){
            return $this->r_possibleresult->insert_records_to_r_possibleresult($columns, $records,$redundancy_check,$printSQL);
        }

     /**
        * Performs a raw Query
        * @param $sql string sql to execute
        * @return string sql results
        * @throws \app\libs\marvik\libs\database\core\mysql\NullabilityException
        */
	public function rawQuery($sql){

		$queried_r_possibleresult = $this->r_possibleresult->get_database_utils()->rawQuery($sql);

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_r_possibleresult);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_r_possibleresult);
		}
	}

	public function query_eng_build($queried_r_possibleresult){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_r_possibleresult);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_r_possibleresult);
		}
	}
	public function query_user_build($queried_r_possibleresult){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_r_possibleresult);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_r_possibleresult);
		}
	}
	public function export_query_json($queried_r_possibleresult){
		$query_json = json_encode($queried_r_possibleresult);
		return $query_json;
	}
	public function export_query_html($queried_r_possibleresult){
		$query_html = "";
		foreach ( $queried_r_possibleresult as $r_possibleresult_row_items ) {
			$query_html .= $this->process_query_for_html_export ( $r_possibleresult_row_items );
		}
		return $query_html;
	}

	private function process_query_for_html_export ( $r_possibleresult_row_items ){
		$html_export ='<div style="padding:10px;margin:10px;border:2px solid black;"><h3>'  .$this->table.  '</h3>';
		
		$id = $r_possibleresult_row_items ['id'];
	if ($id  != null) {
	$html_export .= $this->parseHtmlExport ( 'id', $id  );
}
$scheme_id = $r_possibleresult_row_items ['scheme_id'];
	if ($scheme_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'scheme_id', $scheme_id  );
}
$scheme_sub_group = $r_possibleresult_row_items ['scheme_sub_group'];
	if ($scheme_sub_group  != null) {
	$html_export .= $this->parseHtmlExport ( 'scheme_sub_group', $scheme_sub_group  );
}
$response = $r_possibleresult_row_items ['response'];
	if ($response  != null) {
	$html_export .= $this->parseHtmlExport ( 'response', $response  );
}

		
		return $html_export .='</div>';
	}

	private function parseHtmlExport($title,$message){
		return '<div style="width:400px;"><h4>' . $title . '</h4><hr /><p>' . $message . '</p></div>';
	}
} ?>
