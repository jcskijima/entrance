<div class="page-header">
    <h3><?php echo $title_for_layout; ?></h3>
</div>
<?php
        
    /**
     * FormHelperの宣言
     */
    echo $this->Form->create('EntranceData', 
        array(
            'name'=>'usedKey'
            ,'inputDefaults' => array(
//            'class' => 'form-control'
            )
        )
    );
    
    /**
     * 詳細画面にて行う日付の遷移(翌日及び前日)
     */
    echo '<p>';
    echo $displaydate."(".$w.")";
    echo '</p>';    

    /**
     * 表示項目名：出社時間
     * DB項目名　：ENT_TIME
     * 表示する値：時間(24時間形式)
     * 初期表示値：08:00
     */
    echo "<div class='form-inline'>";
    echo '<p>';
    echo $this->Form->input('ENT_TIME', array(
        'type' => 'time'
        ,'label' => '出社時間'
        ,'timeFormat' => '24' 
        ,'selected' => $enttime
    ));
    echo '</p>';
    echo '</div>';
    
    /**
     * 表示項目名：最初に出社した人
     * DB項目名　：ENT_NAME
     * 表示する値：テキストボックス
     * 初期表示値：空白
     */
    echo '<p>';
    echo $this->Form->input('ENT_NAME', array(
        'type' => 'textbox' 
        ,'label' => '最初に出社した人：'
        ,'required' => false
        ,'default' => ''
        ,'maxLength' => 40
    ));
    echo '</p>';
    
    /**
     * 表示項目名：コメント(気がついたこと)
     * DB項目名　：ENT_COMMENT
     * 表示する値：テキストエリア
     * 初期表示値：空白
     */
    echo '<p>';
    echo $this->Form->input('ENT_COMMENT', array(
        'type'=>'textarea', 
        'label'=>'コメント(気がついたこと)：' 
        ,'default' => ''
        ,'maxLength' => 400
        ,'required' => false
    ));
    echo '</p>';
    
    /**
     * 表示項目名：退社時間
     * DB項目名　：LEAVE_TIME
     * 表示する値：時間(24時間形式)
     * 初期表示値：20:00
     */
    echo "<div class='form-inline'>";
    echo '<p>';
    echo $this->Form->input('LEAVE_TIME', array(
        'type' => 'time'
        ,'label' => '退社時間'
        ,'timeFormat' => '24' 
        ,'selected' => $leavetime
    ));
    echo '</p>';
    echo '</div>';
    
    /**
     * 表示項目名：最後に退社した人
     * DB項目名　：LEAVE_NAME
     * 表示する値：テキストボックス
     * 初期表示値：空白
     */
    echo '<p>';
    echo $this->Form->input('LEAVE_NAME', array(
        'type' => 'textbox' 
        ,'label' => '最後に退社した人' 
        ,'required' => false 
        ,'default' => ''
        ,'maxLength' => 40
    ));
    echo '</p>'; 
    
    echo '<p>';
    echo '<label>チェック項目</label>';
    echo '</p>'; 
    
    /**
     * 表示項目名：クリアデスク
     * DB項目名　：LEAVE_CLEAR
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_CLEAR', array( 
        'type' => 'checkbox' 
        ,'label' => 'クリアデスク'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：室内の窓を施錠
     * DB項目名　：LEAVE_WINDOW
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_WINDOW', array( 
        'type' => 'checkbox' 
        ,'label' => '室内の窓を施錠'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：プリンタの電源OFF
     * DB項目名　：LEAVE_PRINTER
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_PRINTER', array( 
        'type' => 'checkbox' 
        ,'label' => 'プリンタの電源OFF'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：加湿器(冬期)電源OFF
     * DB項目名　：LEAVE_HUMID
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_HUMID', array( 
        'type' => 'checkbox' 
        ,'label' => '加湿器(冬期)電源OFF'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：FAX・コピー確認(紙は残っていないか)
     * DB項目名　：LEAVE_FAX
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_FAX', array( 
        'type' => 'checkbox' 
        ,'label' => 'FAX・コピー確認(紙は残っていないか)'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：エアコンの電源OFF
     * DB項目名　：LEAVE_AIRCON
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_AIRCON', array( 
        'type' => 'checkbox' 
        ,'label' => 'エアコンの電源OFF'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：サーバー室のエアコンの電源ON
     * DB項目名　：LEAVE_SEAIRCON
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_SEAIRCON', array( 
        'type' => 'checkbox' 
        ,'label' => 'サーバー室のエアコンの電源ON'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：全室内の消灯
     * DB項目名　：LEAVE_LIGHT
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_LIGHT', array( 
        'type' => 'checkbox' 
        ,'label' => '全室内の消灯'
        ,'default' => ''
        ,'class' => 'leavecheck'
    ));
    
    /**
     * 表示項目名：自分用、最終退室用、その他
     * DB項目名　：LEAVE_KEY
     * 表示する値：ラジオボタン
     * 初期表示値：(1)最終退室用
     */
    echo '<p style="margin-top:15px;"><label>使用した鍵</label>';
    echo '<div class = "input radio">';
    $options = array('1' => '最終退室用', '2' => '自分用', '3' => 'その他');
    $attributes = array('legend' => false , 'onClick' => 'changeDisabled()' 
                        ,'default' => 1, 'class' => false, 'separator'=>'<br>'
                        ,'required' => false);
    echo $this->Form->radio('LEAVE_KEY', $options, $attributes);
    echo $this->Form->error('LEAVE_KEY', '必ず選択してください。');
    echo '</div>';
    
    /**
     * 表示項目名：なし
     * DB項目名　：LEAVE_COMMENT
     * 表示する値：テキストエリア
     * 初期表示値：空白
     */
    echo $this->Form->input('LEAVE_COMMENT', array(
        'type'=>'textbox'
        ,'label'=>false
        ,'disabled'=>true
        ,'required' => false
        ,'maxLength' => 100
    ));
    echo '</p>';
    
    /**
     * 表示項目名：管理者チェック
     * DB項目名　：MANAGER_CHECK
     * 表示する値：チェックボックス
     * 初期表示値：空白
     */
    echo '<p style="margin-top:20px;">';
    echo $this->Form->input('MANAGER_CHECK', array(
        'type' => 'checkbox'
        ,'label' => '個人情報管理者(筆頭)による確認'
        ,'default' => ''
        ,'class' => ''
    ));
    echo '</p>';
    
    /**
     * FormHelperの終了
     */
    echo $this->Form->end(); 

?>