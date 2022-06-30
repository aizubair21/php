<?php
class arrayStatic
{
    public static $name = [
        'name' => 'sakib', 'nickname' => 'lorem', 'lastname' => 'ipsum', 'reference' => 'fakirul', 'surename' => 'lorence'
    ];
    public static function intro()
    {

        foreach (static::$name as $key => $value) {
            $result[$key] =  $value;
            // array_push($result, $value);
        }
        return $result;
    }
}

$output = arrayStatic::intro();
// print_r($output['2']); // not a indexed array, is associative array
// echo $output['reference'];



//static method real example :)
class arr
{
    public static $query_info = [
        'select' => 'SELECT ', 'table' => ' FROM ', 'condition' => ' WHERE  '
    ], $select = [], $table, $condition;

    // public function __construct($hostname, $username, $password, $dbname)
    // {
    //     $conn = new mysqli('$hostname', '$username', '$password', '$bdname');
    //     if ($conn) {
    //         return $conn;
    //     } else {
    //         return false;
    //     }
    // }

    public static  function getInfo()
    {
        $result = static::$query_info['select'];
        if (!empty(static::$select)) {
            $result .= implode(', ', static::$select);
        }

        if (!empty(static::$table)) {
            $result .= static::$query_info['table'];
            $result .= static::$table;
        }

        if (!empty(static::$condition)) {
            $result .= static::$query_info['condition'];
            $result .= static::$condition;
        }

        return $result;
    }

    public static function select($select)
    {
        static::$select = explode(',', $select);
        // print_r(static::$select);7
        return new static;
    }

    public static function from($table)
    {
        static::$table = $table;
        return new static;
    }

    public static function where($where)
    {
        static::$condition = $where;
        return new static;
    }
}


// arr::select('postId, postTitle, postSlug, postCategory, postAuthor, postCrated_at, postStatus');
// arr::from('author');
// arr::where('postStatus = 1');
// echo (arr::getInfo());

//now we ca use method chaining
// arr::select('postId, postTitle, postSlug, postCrated_at, postStatus')->from('author')->where('postStatus = 1');
// echo (arr::getInfo()); //SELECT postId,  postTitle,  postSlug,  postCrated_at,  postStatus FROM author WHERE  postStatus = 1

arr::select('*')->from('users');
echo arr::getInfo(); //SELECT * FROM users
