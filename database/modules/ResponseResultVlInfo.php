<?php 

	namespace database\modules;

	use database\crud\ResponseResultVl;

	/**
	*  
	*	ResponseResultVlInfo
	*  
	* Provides High level features for interacting with the ResponseResultVl;
	*
	* This source code is auto-generated
    *
    * @author Victor Mwenda
    * Email : vmwenda.vm@gmail.com
    * Phone : +254(0)718034449
	*/
	class ResponseResultVlInfo{

	private $build;
	private $client;
	private $action;
	private $response_result_vl;
	private $table = 'response_result_vl';
	/**
	 * ResponseResultVlInfo
	 * 
	 * Class to get all the response_result_vl Information from the response_result_vl table 
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
		
		$this->response_result_vl = new ResponseResultVl( $action, $client );

	}

	

		/**
	* Inserts data into the table[response_result_vl] in the order below
	* array ('shipment_map_id','sample_id','reported_viral_load','calculated_score','created_by','created_on','updated_by','updated_on')
	* is mappped into 
	* array ($shipment_map_id,$sample_id,$reported_viral_load,$calculated_score,$created_by,$created_on,$updated_by,$updated_on)
	* @return 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert($shipment_map_id,$sample_id,$reported_viral_load,$calculated_score,$created_by,$created_on,$updated_by,$updated_on,$redundancy_check= false, $printSQL = false) {
		$columns = array('shipment_map_id','sample_id','reported_viral_load','calculated_score','created_by','created_on','updated_by','updated_on');
		$records = array($shipment_map_id,$sample_id,$reported_viral_load,$calculated_score,$created_by,$created_on,$updated_by,$updated_on);
		return $this->response_result_vl->insert_prepared_records($shipment_map_id,$sample_id,$reported_viral_load,$calculated_score,$created_by,$created_on,$updated_by,$updated_on,$redundancy_check,$printSQL );
	}


 	/**
     * @param $distinct
     * @param string $extraSQL
     * @return string
     */
	public function query($distinct,$extraSQL=""){

		$columns = $records = array ();
		$queried_response_result_vl = $this->response_result_vl->fetch_assoc_in_response_result_vl ($distinct, $columns, $records,$extraSQL );

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_response_result_vl);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_response_result_vl);
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
        return $this->response_result_vl->insert_raw($records, $printSQL);
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
        public function insert_records_to_response_result_vl(Array $columns, Array $records,$redundancy_check = false, $printSQL = false){
            return $this->response_result_vl->insert_records_to_response_result_vl($columns, $records,$redundancy_check,$printSQL);
        }

     /**
        * Performs a raw Query
        * @param $sql string sql to execute
        * @return string sql results
        * @throws \app\libs\marvik\libs\database\core\mysql\NullabilityException
        */
	public function rawQuery($sql){

		$queried_response_result_vl = $this->response_result_vl->get_database_utils()->rawQuery($sql);

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_response_result_vl);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_response_result_vl);
		}
	}

	public function query_eng_build($queried_response_result_vl){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_response_result_vl);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_response_result_vl);
		}
	}
	public function query_user_build($queried_response_result_vl){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_response_result_vl);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_response_result_vl);
		}
	}
	public function export_query_json($queried_response_result_vl){
		$query_json = json_encode($queried_response_result_vl);
		return $query_json;
	}
	public function export_query_html($queried_response_result_vl){
		$query_html = "";
		foreach ( $queried_response_result_vl as $response_result_vl_row_items ) {
			$query_html .= $this->process_query_for_html_export ( $response_result_vl_row_items );
		}
		return $query_html;
	}

	private function process_query_for_html_export ( $response_result_vl_row_items ){
		$html_export ='<div style="padding:10px;margin:10px;border:2px solid black;"><h3>'  .$this->table.  '</h3>';
		
		$shipment_map_id = $response_result_vl_row_items ['shipment_map_id'];
	if ($shipment_map_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'shipment_map_id', $shipment_map_id  );
}
$sample_id = $response_result_vl_row_items ['sample_id'];
	if ($sample_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'sample_id', $sample_id  );
}
$reported_viral_load = $response_result_vl_row_items ['reported_viral_load'];
	if ($reported_viral_load  != null) {
	$html_export .= $this->parseHtmlExport ( 'reported_viral_load', $reported_viral_load  );
}
$calculated_score = $response_result_vl_row_items ['calculated_score'];
	if ($calculated_score  != null) {
	$html_export .= $this->parseHtmlExport ( 'calculated_score', $calculated_score  );
}
$created_by = $response_result_vl_row_items ['created_by'];
	if ($created_by  != null) {
	$html_export .= $this->parseHtmlExport ( 'created_by', $created_by  );
}
$created_on = $response_result_vl_row_items ['created_on'];
	if ($created_on  != null) {
	$html_export .= $this->parseHtmlExport ( 'created_on', $created_on  );
}
$updated_by = $response_result_vl_row_items ['updated_by'];
	if ($updated_by  != null) {
	$html_export .= $this->parseHtmlExport ( 'updated_by', $updated_by  );
}
$updated_on = $response_result_vl_row_items ['updated_on'];
	if ($updated_on  != null) {
	$html_export .= $this->parseHtmlExport ( 'updated_on', $updated_on  );
}

		
		return $html_export .='</div>';
	}

	private function parseHtmlExport($title,$message){
		return '<div style="width:400px;"><h4>' . $title . '</h4><hr /><p>' . $message . '</p></div>';
	}
} ?>
