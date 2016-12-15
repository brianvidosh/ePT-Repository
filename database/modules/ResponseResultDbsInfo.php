<?php 

	namespace database\modules;

	use database\crud\ResponseResultDbs;

	/**
	*  
	*	ResponseResultDbsInfo
	*  
	* Provides High level features for interacting with the ResponseResultDbs;
	*
	* This source code is auto-generated
    *
    * @author Victor Mwenda
    * Email : vmwenda.vm@gmail.com
    * Phone : +254(0)718034449
	*/
	class ResponseResultDbsInfo{

	private $build;
	private $client;
	private $action;
	private $response_result_dbs;
	private $table = 'response_result_dbs';
	/**
	 * ResponseResultDbsInfo
	 * 
	 * Class to get all the response_result_dbs Information from the response_result_dbs table 
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
		
		$this->response_result_dbs = new ResponseResultDbs( $action, $client );

	}

	

		/**
	* Inserts data into the table[response_result_dbs] in the order below
	* array ('shipment_map_id','sample_id','eia_1','lot_no_1','exp_date_1','od_1','cutoff_1','eia_2','lot_no_2','exp_date_2','od_2','cutoff_2','eia_3','lot_no_3','exp_date_3','od_3','cutoff_3','wb','wb_lot','wb_exp_date','wb_160','wb_120','wb_66','wb_55','wb_51','wb_41','wb_31','wb_24','wb_17','reported_result','calculated_score','created_by','created_on','updated_by','updated_on')
	* is mappped into 
	* array ($shipment_map_id,$sample_id,$eia_1,$lot_no_1,$exp_date_1,$od_1,$cutoff_1,$eia_2,$lot_no_2,$exp_date_2,$od_2,$cutoff_2,$eia_3,$lot_no_3,$exp_date_3,$od_3,$cutoff_3,$wb,$wb_lot,$wb_exp_date,$wb_160,$wb_120,$wb_66,$wb_55,$wb_51,$wb_41,$wb_31,$wb_24,$wb_17,$reported_result,$calculated_score,$created_by,$created_on,$updated_by,$updated_on)
	* @return 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert($shipment_map_id,$sample_id,$eia_1,$lot_no_1,$exp_date_1,$od_1,$cutoff_1,$eia_2,$lot_no_2,$exp_date_2,$od_2,$cutoff_2,$eia_3,$lot_no_3,$exp_date_3,$od_3,$cutoff_3,$wb,$wb_lot,$wb_exp_date,$wb_160,$wb_120,$wb_66,$wb_55,$wb_51,$wb_41,$wb_31,$wb_24,$wb_17,$reported_result,$calculated_score,$created_by,$created_on,$updated_by,$updated_on,$redundancy_check= false, $printSQL = false) {
		$columns = array('shipment_map_id','sample_id','eia_1','lot_no_1','exp_date_1','od_1','cutoff_1','eia_2','lot_no_2','exp_date_2','od_2','cutoff_2','eia_3','lot_no_3','exp_date_3','od_3','cutoff_3','wb','wb_lot','wb_exp_date','wb_160','wb_120','wb_66','wb_55','wb_51','wb_41','wb_31','wb_24','wb_17','reported_result','calculated_score','created_by','created_on','updated_by','updated_on');
		$records = array($shipment_map_id,$sample_id,$eia_1,$lot_no_1,$exp_date_1,$od_1,$cutoff_1,$eia_2,$lot_no_2,$exp_date_2,$od_2,$cutoff_2,$eia_3,$lot_no_3,$exp_date_3,$od_3,$cutoff_3,$wb,$wb_lot,$wb_exp_date,$wb_160,$wb_120,$wb_66,$wb_55,$wb_51,$wb_41,$wb_31,$wb_24,$wb_17,$reported_result,$calculated_score,$created_by,$created_on,$updated_by,$updated_on);
		return $this->response_result_dbs->insert_prepared_records($shipment_map_id,$sample_id,$eia_1,$lot_no_1,$exp_date_1,$od_1,$cutoff_1,$eia_2,$lot_no_2,$exp_date_2,$od_2,$cutoff_2,$eia_3,$lot_no_3,$exp_date_3,$od_3,$cutoff_3,$wb,$wb_lot,$wb_exp_date,$wb_160,$wb_120,$wb_66,$wb_55,$wb_51,$wb_41,$wb_31,$wb_24,$wb_17,$reported_result,$calculated_score,$created_by,$created_on,$updated_by,$updated_on,$redundancy_check,$printSQL );
	}


 	/**
     * @param $distinct
     * @param string $extraSQL
     * @return string
     */
	public function query($distinct,$extraSQL=""){

		$columns = $records = array ();
		$queried_response_result_dbs = $this->response_result_dbs->fetch_assoc_in_response_result_dbs ($distinct, $columns, $records,$extraSQL );

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_response_result_dbs);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_response_result_dbs);
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
        return $this->response_result_dbs->insert_raw($records, $printSQL);
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
        public function insert_records_to_response_result_dbs(Array $columns, Array $records,$redundancy_check = false, $printSQL = false){
            return $this->response_result_dbs->insert_records_to_response_result_dbs($columns, $records,$redundancy_check,$printSQL);
        }

     /**
        * Performs a raw Query
        * @param $sql string sql to execute
        * @return string sql results
        * @throws \app\libs\marvik\libs\database\core\mysql\NullabilityException
        */
	public function rawQuery($sql){

		$queried_response_result_dbs = $this->response_result_dbs->get_database_utils()->rawQuery($sql);

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_response_result_dbs);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_response_result_dbs);
		}
	}

	public function query_eng_build($queried_response_result_dbs){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_response_result_dbs);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_response_result_dbs);
		}
	}
	public function query_user_build($queried_response_result_dbs){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_response_result_dbs);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_response_result_dbs);
		}
	}
	public function export_query_json($queried_response_result_dbs){
		$query_json = json_encode($queried_response_result_dbs);
		return $query_json;
	}
	public function export_query_html($queried_response_result_dbs){
		$query_html = "";
		foreach ( $queried_response_result_dbs as $response_result_dbs_row_items ) {
			$query_html .= $this->process_query_for_html_export ( $response_result_dbs_row_items );
		}
		return $query_html;
	}

	private function process_query_for_html_export ( $response_result_dbs_row_items ){
		$html_export ='<div style="padding:10px;margin:10px;border:2px solid black;"><h3>'  .$this->table.  '</h3>';
		
		$shipment_map_id = $response_result_dbs_row_items ['shipment_map_id'];
	if ($shipment_map_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'shipment_map_id', $shipment_map_id  );
}
$sample_id = $response_result_dbs_row_items ['sample_id'];
	if ($sample_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'sample_id', $sample_id  );
}
$eia_1 = $response_result_dbs_row_items ['eia_1'];
	if ($eia_1  != null) {
	$html_export .= $this->parseHtmlExport ( 'eia_1', $eia_1  );
}
$lot_no_1 = $response_result_dbs_row_items ['lot_no_1'];
	if ($lot_no_1  != null) {
	$html_export .= $this->parseHtmlExport ( 'lot_no_1', $lot_no_1  );
}
$exp_date_1 = $response_result_dbs_row_items ['exp_date_1'];
	if ($exp_date_1  != null) {
	$html_export .= $this->parseHtmlExport ( 'exp_date_1', $exp_date_1  );
}
$od_1 = $response_result_dbs_row_items ['od_1'];
	if ($od_1  != null) {
	$html_export .= $this->parseHtmlExport ( 'od_1', $od_1  );
}
$cutoff_1 = $response_result_dbs_row_items ['cutoff_1'];
	if ($cutoff_1  != null) {
	$html_export .= $this->parseHtmlExport ( 'cutoff_1', $cutoff_1  );
}
$eia_2 = $response_result_dbs_row_items ['eia_2'];
	if ($eia_2  != null) {
	$html_export .= $this->parseHtmlExport ( 'eia_2', $eia_2  );
}
$lot_no_2 = $response_result_dbs_row_items ['lot_no_2'];
	if ($lot_no_2  != null) {
	$html_export .= $this->parseHtmlExport ( 'lot_no_2', $lot_no_2  );
}
$exp_date_2 = $response_result_dbs_row_items ['exp_date_2'];
	if ($exp_date_2  != null) {
	$html_export .= $this->parseHtmlExport ( 'exp_date_2', $exp_date_2  );
}
$od_2 = $response_result_dbs_row_items ['od_2'];
	if ($od_2  != null) {
	$html_export .= $this->parseHtmlExport ( 'od_2', $od_2  );
}
$cutoff_2 = $response_result_dbs_row_items ['cutoff_2'];
	if ($cutoff_2  != null) {
	$html_export .= $this->parseHtmlExport ( 'cutoff_2', $cutoff_2  );
}
$eia_3 = $response_result_dbs_row_items ['eia_3'];
	if ($eia_3  != null) {
	$html_export .= $this->parseHtmlExport ( 'eia_3', $eia_3  );
}
$lot_no_3 = $response_result_dbs_row_items ['lot_no_3'];
	if ($lot_no_3  != null) {
	$html_export .= $this->parseHtmlExport ( 'lot_no_3', $lot_no_3  );
}
$exp_date_3 = $response_result_dbs_row_items ['exp_date_3'];
	if ($exp_date_3  != null) {
	$html_export .= $this->parseHtmlExport ( 'exp_date_3', $exp_date_3  );
}
$od_3 = $response_result_dbs_row_items ['od_3'];
	if ($od_3  != null) {
	$html_export .= $this->parseHtmlExport ( 'od_3', $od_3  );
}
$cutoff_3 = $response_result_dbs_row_items ['cutoff_3'];
	if ($cutoff_3  != null) {
	$html_export .= $this->parseHtmlExport ( 'cutoff_3', $cutoff_3  );
}
$wb = $response_result_dbs_row_items ['wb'];
	if ($wb  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb', $wb  );
}
$wb_lot = $response_result_dbs_row_items ['wb_lot'];
	if ($wb_lot  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_lot', $wb_lot  );
}
$wb_exp_date = $response_result_dbs_row_items ['wb_exp_date'];
	if ($wb_exp_date  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_exp_date', $wb_exp_date  );
}
$wb_160 = $response_result_dbs_row_items ['wb_160'];
	if ($wb_160  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_160', $wb_160  );
}
$wb_120 = $response_result_dbs_row_items ['wb_120'];
	if ($wb_120  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_120', $wb_120  );
}
$wb_66 = $response_result_dbs_row_items ['wb_66'];
	if ($wb_66  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_66', $wb_66  );
}
$wb_55 = $response_result_dbs_row_items ['wb_55'];
	if ($wb_55  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_55', $wb_55  );
}
$wb_51 = $response_result_dbs_row_items ['wb_51'];
	if ($wb_51  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_51', $wb_51  );
}
$wb_41 = $response_result_dbs_row_items ['wb_41'];
	if ($wb_41  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_41', $wb_41  );
}
$wb_31 = $response_result_dbs_row_items ['wb_31'];
	if ($wb_31  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_31', $wb_31  );
}
$wb_24 = $response_result_dbs_row_items ['wb_24'];
	if ($wb_24  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_24', $wb_24  );
}
$wb_17 = $response_result_dbs_row_items ['wb_17'];
	if ($wb_17  != null) {
	$html_export .= $this->parseHtmlExport ( 'wb_17', $wb_17  );
}
$reported_result = $response_result_dbs_row_items ['reported_result'];
	if ($reported_result  != null) {
	$html_export .= $this->parseHtmlExport ( 'reported_result', $reported_result  );
}
$calculated_score = $response_result_dbs_row_items ['calculated_score'];
	if ($calculated_score  != null) {
	$html_export .= $this->parseHtmlExport ( 'calculated_score', $calculated_score  );
}
$created_by = $response_result_dbs_row_items ['created_by'];
	if ($created_by  != null) {
	$html_export .= $this->parseHtmlExport ( 'created_by', $created_by  );
}
$created_on = $response_result_dbs_row_items ['created_on'];
	if ($created_on  != null) {
	$html_export .= $this->parseHtmlExport ( 'created_on', $created_on  );
}
$updated_by = $response_result_dbs_row_items ['updated_by'];
	if ($updated_by  != null) {
	$html_export .= $this->parseHtmlExport ( 'updated_by', $updated_by  );
}
$updated_on = $response_result_dbs_row_items ['updated_on'];
	if ($updated_on  != null) {
	$html_export .= $this->parseHtmlExport ( 'updated_on', $updated_on  );
}

		
		return $html_export .='</div>';
	}

	private function parseHtmlExport($title,$message){
		return '<div style="width:400px;"><h4>' . $title . '</h4><hr /><p>' . $message . '</p></div>';
	}
} ?>