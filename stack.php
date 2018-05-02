<?php
class data {  
    //数据  
    private $data;  
      
    public function __construct($data){  
        $this->data=$data;  
        echo $data.":哥入栈了！".PHP_EOL;  
    }  
      
    public function getData(){  
        return $this->data;  
    }  
    public function __destruct(){  
        echo $this->data."：哥走了！".PHP_EOL;  
    }  
}

class stack {  
    private $size;  
    private $top;  
    private $stack=array();  
    public function __construct($size){  
        $this->Init_Stack($size);  
    }  
    //初始化栈  
    public function Init_Stack($size){  
        $this->size=$size;  
        $this->top=-1;  
    }  
    //判断栈是否为空  
    public function Empty_Stack(){  
        if($this->top==-1)return 1;  
        else return 0;  
    }  
    //判断栈是否已满  
    public function Full_Stack(){  
        if($this->top<$this->size-1)return 0;  
        else return 1;  
    }  
    //入栈  
    public function Push_Stack($data){  
        if($this->Full_Stack())echo "栈满了".PHP_EOL;  
        else $this->stack[++$this->top]=new data($data);  
    }  
    //出栈  
    public function Pop_Stack(){  
        if($this->Empty_Stack())echo "栈空着呢".PHP_EOL;  
        else unset($this->stack[$this->top--]);  
    }  
    //读取栈顶元素  
    public function Top_Stack(){  
        return $this->Empty_Stack()?"栈空无数据！":$this->stack[$this->top]->getData();  
    }  
      
}  

$stack=new stack(4);  
$stack->Pop_Stack();  
$stack->Push_Stack("aa");  
$stack->Push_Stack("aa1");  
// $stack->Pop_Stack();  
$stack->Push_Stack("aa2");  