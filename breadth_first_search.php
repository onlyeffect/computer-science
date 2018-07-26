<?php

$graph["Vadim"] = ["Bob", "John", "Alice"];
$graph["Bob"] = ["Michael", "Pegie"];
$graph["John"] = ["Max", "George"];
$graph["Alice"] = ["Pegie"];
$graph["Max"] = ["Brad"];
$graph["Brad"] = ["George"];
$graph["Michael"] = [];
$graph["Pegie"] = [];
$graph["George"] = [];

function searchConnection(array $graph, string $user, string $connect)
{
	if($graph[$user]){
		$deque[] = $user;
		$searched = [];
		while(!empty($deque)){
			$person = array_shift($deque);
			if(!in_array($person, $searched)){
				if($person === $connect){
					return "$user has a connection to $connect!";
				} else {
					$searched[] = $person;
					$deque = array_merge($deque, $graph[$person]);
				}
			}
        }
        return "$user has no connection to $connect :(";
	} else {
		return "User $user not found.";
	} 
}

echo searchConnection($graph, "Vadim", "Brad") . "<br>";
echo searchConnection($graph, "Vadim", "NoSuchConnection") . "<br>";
echo searchConnection($graph, "NoSuchUser", "Brad") . "<br>";
