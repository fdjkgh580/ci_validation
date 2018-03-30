# jsnlib-validation
簡單辨識是否有輸入參數到 function 的方法

### 範例
````php
function my($param)
{
    if (\Jsnlib\Validation::no_input($param->age))
        throw new \Exception("缺少參數 age");
}
````

#### 若有帶入參數
````php
\Jsnlib\Validation::input($data)
\Jsnlib\Validation::input($data, ['string_empty' => false])
````

#### 若無帶入參數
````php
\Jsnlib\Validation::no_input($data)
\Jsnlib\Validation::no_input($data, ['string_empty' => false])
````



通過有填寫參數的規則如下：

O) TRUE            
O) FALSE           
X) NULL            
X) (string)''      
O) (int)0          
O) (float)0.5      
O) (int)-1         
O) (int)1          
O) (string)'1'     
O) (string)'0'     
O) (object) Class  

若將 string_empty 設定為 true，將會允許````(string)''````認定為通過。
