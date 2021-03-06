<?php 

	namespace database\modules;

	use database\crud\ReferenceResultDts;

	/**
	*  
	*	ReferenceResultDtsInfo
	*  
	* Provides High level features for interacting with the ReferenceResultDts;
	*
	* This source code is auto-generated
    *
    * @author Victor Mwenda
    * Email : vmwenda.vm@gmail.com
    * Phone : +254(0)718034449
	*/
	class ReferenceResultDtsInfo{

	private $build;
	private $client;
	private $action;
	private $reference_result_dts;
	private $table = 'reference_result_dts';
	/**
	 * ReferenceResultDtsInfo
	 * 
	 * Class to get all the reference_result_dts Information from the reference_result_dts table 
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
		
		$this->reference_result_dts = new ReferenceResultDts( $action, $client );

	}

	

		/**
	* Inserts data into the table[reference_result_dts] in the order below
	* array ('shipment_id','sample_id','sample_label','reference_result','control','mandatory','sample_score')
	* is mappped into 
	* array ($shipment_id,$sample_id,$sample_label,$reference_result,$control,$mandatory,$sample_score)
	* @return 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert($shipment_id,$sample_id,$sample_label,$reference_result,$control,$mandatory,$sample_score,$redundancy_check= false, $printSQL = false) {
		$columns = array('shipment_id','sample_id','sample_label','reference_result','control','mandatory','sample_score');
		$records = array($shipment_id,$sample_id,$sample_label,$reference_result,$control,$mandatory,$sample_score);
		return $this->reference_result_dts->insert_prepared_records($shipment_id,$sample_id,$sample_label,$reference_result,$control,$mandatory,$sample_score,$redundancy_check,$printSQL );
	}


 	/**
     * @param $distinct
     * @param string $extraSQL
     * @return string
     */
	public function query($distinct,$extraSQL=""){

		$columns = $records = array ();
		$queried_reference_result_dts = $this->reference_result_dts->fetch_assoc_in_reference_result_dts ($distinct, $columns, $records,$extraSQL );

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_reference_result_dts);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_reference_result_dts);
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
        return $this->reference_result_dts->insert_raw($records, $printSQL);
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
        public function insert_records_to_reference_result_dts(Array $columns, Array $records,$redundancy_check = false, $printSQL = false){
            return $this->reference_result_dts->insert_records_to_reference_result_dts($columns, $records,$redundancy_check,$printSQL);
        }

     /**
        * Performs a raw Query
        * @param $sql string sql to execute
        * @return string sql results
        * @throws \app\libs\marvik\libs\database\core\mysql\NullabilityException
        */
	public function rawQuery($sql){

		$queried_reference_result_dts = $this->reference_result_dts->get_database_utils()->rawQuery($sql);

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_reference_result_dts);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_reference_result_dts);
		}
	}

	public function query_eng_build($queried_reference_result_dts){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_reference_result_dts);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_reference_result_dts);
		}
	}
	public function query_user_build($queried_reference_result_dts){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_reference_result_dts);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_reference_result_dts);
		}
	}
	public function export_query_json($queried_reference_result_dts){
		$query_json = json_encode($queried_reference_result_dts);
		return $query_json;
	}
	public function export_query_html($queried_reference_result_dts){
		$query_html = "";
		foreach ( $queried_reference_result_dts as $reference_result_dts_row_items ) {
			$query_html .= $this->process_query_for_html_export ( $reference_result_dts_row_items );
		}
		return $query_html;
	}

	private function process_query_for_html_export ( $reference_result_dts_row_items ){
		$html_export ='<div style="padding:10px;margin:10px;border:2px solid black;"><h3>'  .$this->table.  '</h3>';
		
		$shipment_id = $reference_result_dts_row_items ['shipment_id'];
	if ($shipment_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'shipment_id', $shipment_id  );
}
$sample_id = $reference_result_dts_row_items ['sample_id'];
	if ($sample_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'sample_id', $sample_id  );
}
$sample_label = $reference_result_dts_row_items ['sample_label'];
	if ($sample_label  != null) {
	$html_export .= $this->parseHtmlExport ( 'sample_label', $sample_label  );
}
$reference_result = $reference_result_dts_row_items ['reference_result'];
	if ($reference_result  != null) {
	$html_export .= $this->parseHtmlExport ( 'reference_result', $reference_result  );
}
$control = $reference_result_dts_row_items ['control'];
	if ($control  != null) {
	$html_export .= $this->parseHtmlExport ( 'control', $control  );
}
$mandatory = $reference_result_dts_row_items ['mandatory'];
	if ($mandatory  != null) {
	$html_export .= $this->parseHtmlExport ( 'mandatory', $mandatory  );
}
$sample_score = $reference_result_dts_row_items ['sample_score'];
	if ($sample_score  != null) {
	$html_export .= $this->parseHtmlExport ( 'sample_score', $sample_score  );
}

		
		return $html_export .='</div>';
	}

	private function parseHtmlExport($title,$message){
		return '<div style="width:400px;"><h4>' . $title . '</h4><hr /><p>' . $message . '</p></div>';
	}
} ?>
