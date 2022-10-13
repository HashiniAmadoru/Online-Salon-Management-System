<?php

if(! function_exists('generate_id')){

function generate_id($table,$field,$code,$intlong)
{
	$last_num=0;

	$table_last_record = DB::table($table)->orderBy($field,'desc')->first($field);
	

	if($table_last_record){
		$last_num = $table_last_record->$field;
	}

	$numeric = substr($last_num,-$intlong);
	$num = $numeric+1;
	$year = Date('y');
	$id = $code.$year.str_pad($num,$intlong,"0",STR_PAD_LEFT);

	return $id;
}

}


if(! function_exists('personalDetails')){

	function personalDetails($email){

		$personal_Data = DB::table('personals')->where('email',$email)->first();

		return $personal_Data;
	}
}


if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        $path = explode('.', $path);
        $segment = 1;
        foreach($path as $p) {
            if((request()->segment($segment) == $p) == false) {
                return '';
            }
            $segment++;
        }
        return ' active';
    }
}

?>