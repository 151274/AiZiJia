<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/1/8
 * Time: 10:14
 */

//数据库操作类
class Sql
{
    protected $table;//表名
    private $filed=" * ";//列名
    private $where="";//查询条件
    private $order="";//排序
    private $limit="";//限制返回的行数

    private $group="";//分组

    private $join="";//表连接

    private $data="";//修改或插入的数据

    private $bind=array();

    //构造函数
    public function __construct($name = null){
        DB::pdo();  #拓展：关于一些初始化的工作，可以放入构造函数中
        $this->table=$name;
    }

    public function table($table){
        $this->table=$table;
        return $this;
    }
    //设置查询的列名
    public function fileds($str){
        $this->filed=$str;
        return $this;
    }
    //设置查询条件
    public function where($arr){
//            $this->where = " where " . $arr;
        $this->where=" where ";
        if (is_array($arr)){
            foreach ($arr as $k=>$val){
                $this->where.=$k."=".$val." and ";
            }
            //删除最后一个and
            $this->where= preg_replace("/and\s$/","",$this->where);
        }elseif(is_string($arr)){
            $this->where.=$arr;
        }
        return $this;
    }
    //设置排序
    public function order($str_o1,$str_o2){
        $this->order=" order by ".$str_o1." ".$str_o2;
        return $this;
    }
    //设置限制返回的行数
    public function limit($start,$row){
        $this->limit=" limit ".$start.",".$row;
        return $this;
    }

    //分组
    public function group($fildname){
        $this->group=" group by ".$fildname;
        return $this;
    }

    //join 表连接
    public function join($tablename,$on){
        $this->join .= " inner join " . $tablename . " on " . $on;
        return $this;
    }




    //设置查询语句
    public function select(){
        $sql="select ".$this->filed." from ".$this->table.$this->join.$this->where.$this->group.$this->order.$this->limit;
        $smts=DB::$pdo->prepare($sql);
        $smts->execute();
        $arr=$smts->fetchAll(PDO::FETCH_ASSOC);

        $this->table="";//表名
        $this->filed=" * ";//列名
        $this->where="";//查询条件
        $this->order="";//排序
        $this->limit="";//限制返回的行数
        $this->group="";//分组
        $this->join="";//表连接

        return $arr;
//        return $sql;
    }
    /**
     * 查询单行数据的方法
     */
    public function first(){
        $sql="select ".$this->filed." from ".$this->table.$this->join.$this->where.$this->group.$this->order.$this->limit;


       $smts=DB::$pdo->prepare($sql);
        $smts->execute();
        $arr=$smts->fetch(PDO::FETCH_ASSOC);

        $this->table="";//表名
        $this->filed=" * ";//列名
        $this->where="";//查询条件
        $this->order="";//排序
        $this->limit="";//限制返回的行数
        $this->group="";//分组
        $this->join="";//表连接

        return $arr;
//        return $sql;
    }
    public function rowCount(){
        $sql="select ".$this->filed." from ".$this->table.$this->join.$this->where.$this->group.$this->order.$this->limit;


        $smts=DB::$pdo->prepare($sql);
        $smts->execute();
        $arr=$smts->rowCount();

        $this->table="";//表名
        $this->filed=" * ";//列名
        $this->where="";//查询条件
        $this->order="";//排序
        $this->limit="";//限制返回的行数
        $this->group="";//分组
        $this->join="";//表连接

        return $arr;
    }


    /**
     *  $arr 关联数组；
     *  将关联数组转换成 列名=值，列名=值；
     */
    public function setData($arr){

        $this->data=" set ";
        if (is_array($arr)){
            foreach ($arr as $key=>$item){
                $this->data.=$key."=:".$key.",";// .= 在原有的基础上连接
            }
            //删除最后一个and
            $this->data= substr($this->data,0,strlen($this->data)-1);
            $this->bind=$arr;
        }elseif(is_string($arr)){
            $this->data.=$arr;
        }





        return $this;
    }

    //设置删除语句
    public function delete(){
        $sql="delete from ".$this->table.$this->where;
        $result=$this->exec($sql);

        $this->table="";//表名
        $this->filed=" * ";//列名
        $this->where="";//查询条件
        $this->order="";//排序
        $this->limit="";//限制返回的行数
        $this->group="";//分组
        $this->join="";//表连接

        return $result;
    }
    //插入方法
    public function insert(){
        $sql="insert into ".$this->table.$this->data;
        $result=$this->exec($sql);

        $this->table="";//表名
        $this->filed=" * ";//列名
        $this->where="";//查询条件
        $this->order="";//排序
        $this->limit="";//限制返回的行数
        $this->group="";//分组
        $this->join="";//表连接

        return $result;
//        return $sql;
    }
    //修改方法
    public function update(){
        $sql="update ".$this->table.$this->data.$this->where;
        $result=$this->exec($sql);

        $this->table="";//表名
        $this->filed=" * ";//列名
        $this->where="";//查询条件
        $this->order="";//排序
        $this->limit="";//限制返回的行数
        $this->group="";//分组
        $this->join="";//表连接

        return $result;
//        return $sql;
    }

    public function exec($sql){
        $smts=DB::$pdo->prepare($sql);
        $smts->execute($this->bind);
        return $smts->rowCount();//受影响行数
//        return $smts->errorInfo();
    }
}