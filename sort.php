<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
            <?php
            // 関数sort_2wayを作る
            function sort_2way ($array, $order){
                // 引数orderがTRUE（昇順か）
                // YES（昇順）
                if($order){
                    echo "昇順にソートします。<br>";
                    // 引数arrayを昇順にソート
                    sort($array);
                // NO（降順
                }else {
                    echo "降順にソートします。<br>";
                    // 引数arrayを光順にソート
                    rsort($array);
                }
                // ソートした配列のデータを１行ずつ表示する
                foreach($array as $value){
                        echo $value . "<br>";
                }
  

            }

            //ソートする配列を宣言 
            $nums = [15, 4, 18, 23, 10 ];

            // ソート関数を昇順で呼び出す
            sort_2way($nums, true);
            // ソート関数を降順で呼び出す
            sort_2way($nums, false)
        

            ?>
        
    </body>
</heml>
