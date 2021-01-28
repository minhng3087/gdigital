<div style="display:block;padding:0 32px;margin:auto">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" style="width:100%;max-width:520px;margin:32px auto">
    <thead>
        <tr>
            <th style="text-align:center;border-top:1px solid #cccccc;border-bottom:1px solid #cccccc;font-size:22px;line-height:1.4;font-family:Helvetica,Arial,Verdana,'sans-serif','Malgun Gothic','NanumGothic';color:#000;letter-spacing:-1px;padding:11px 0 9px 0;word-wrap:break-word;word-break:normal">
                <u></u>
                Quên mật khẩu
                <u></u>
            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
    <td style="padding:36px 0 32px 0;vertical-align:top;font-size:15px;line-height:18px;color:#666666;font-weight:normal;font-family:Helvetica,Arial,Verdana,'sans-serif','Malgun Gothic','NanumGothic';word-wrap:break-word;word-break:normal">
        <p style="font-weight:bold;font-size:20px;line-height:24px;color:#000000;font-family:Helvetica,Arial,Verdana,'sans-serif','Malgun Gothic','NanumGothic';margin:0 0 32px 0;padding:0"> 
        <u></u> 
        Hãy ấn vào link dưới để xác nhận thay đổi mật khẩu!
        <u></u> 
        </p>
        <ul>
            <li>
            Tài khoản :  <?php echo e($username); ?>
           </li>
           <li>
            Mật khẩu: <?php echo e($codemail); ?>
            </li>
        </ul>
        <p>
         <a href="<?php echo e(url('quen-mat-khau/'.$codemail)); ?>"> Xác nhận mật khẩu</a>    
        </p>
    
    </td>
    </tr>
    </tbody>
    <tfoot>
    
    
    </tfoot>
    </table>
</div>