<?php
    class Person {
        public $firstname;
        public $lastname;

        public function __construct($first, $last)
        {
            $this->firstname = $first;
            $this->lastname = $last;
        }
    };

    function presidential_sorter($left, $right){
        return [$left->lastname, $left->firstname] <=> [$right->lastname, $right->firstname];
    }

    $presidents = [];

    $presidents[] = new Person('George', 'Washington');
    $presidents[] = new Person('John', 'Adams');
    $presidents[] = new Person('Thomas', 'Jefferson');
    $presidents[] = new Person('Barack', 'Obama');
    $presidents[] = new Person('Donald', 'Trump');
    $presidents[] = new Person('Joseph', 'Biden');

    usort($presidents, 'presidential_sorter');

    echo $presidents[0]->lastname, " ", $presidents[1]->lastname;
?>

<?php
    $filename = @$_GET['filename'];
?>