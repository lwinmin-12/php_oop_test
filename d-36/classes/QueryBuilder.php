<?php 

 class QueryBuilder {
   public $tableName , $where , $orWhere , $orderBy;
   function __construct($tableName)
   {
    $this->tableName = $tableName;
    $this->where =  $this->orWhere = $this->orderBy =[];
   } 

   function where ($columnName , $operator , $value) {
    $this->where [] = "$columnName $operator '$value'";
    return $this;
   }

   function orWhere ($columnName , $operator , $value) {
    $this->orWhere [] = "$columnName $operator '$value'";
    // print_r($this->orWhere);
    return $this;
   }

   function orderBy ($columnName , $sort = "ASC") {
    $this-> orderBy [] = "$columnName $sort";
    return $this;
   }

   function sql(){
    $sql = "selet * from ".$this->tableName;
    if(!empty($this->where)){
        $sql .= " where " .join(" AND " , $this->where);
    }
    if(!empty($this->orWhere)){
      $sql .= " OR ".join(" OR " , $this->orWhere);
    }
    if(!empty($this->orderBy)){
      $sql .= " ORDER BY ".join(", " , $this->orderBy);
    }
    $sql .= ';';
    return $sql;
   }
 }