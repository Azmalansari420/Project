<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
   <tbody>
      <tr>
         <td align="center" valign="top">
            <div id="m_6280115077500695801m_5376393821900637156template_header_image">
            </div>
            <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_6280115077500695801m_5376393821900637156template_container" style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px">
               <tbody>
                  <tr>
                     <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="m_6280115077500695801m_5376393821900637156template_header" style="background-color:#96588a;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-radius:3px 3px 0 0">
                           <tbody>
                              <tr>
                                 <td id="m_6280115077500695801m_5376393821900637156header_wrapper" style="padding:36px 48px;display:block">
                                    <h1 style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:center;color:#ffffff"><?=$mail_header ?></h1>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_6280115077500695801m_5376393821900637156template_body">
                           <tbody>
                              <tr>
                                 <td valign="top" id="m_6280115077500695801m_5376393821900637156body_content" style="background-color:#ffffff">
                                    <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                       <tbody>
                                          <tr>
                                             <td valign="top" style="padding:48px 48px 32px">
                                                <div id="m_6280115077500695801m_5376393821900637156body_content_inner" style="color:#636363;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">
                                                   <!-- <p style="margin:0 0 16px">Hi shahrukh,</p> -->
                                                   <!-- <p style="margin:0 0 16px">We have finished processing your order.</p> -->
                                                   
                                                      
                                                   <div style="margin-bottom:40px">
                                                      <table cellspacing="0" cellpadding="6" border="1" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:Helvetica,Roboto,Arial,sans-serif">
                                                         <tbody>
                                                               
<?php

foreach ($data as $key => $value) {
   
?>
<tr>
   <th scope="row"  style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px"><?=ucfirst(str_replace("_", " ", $key)) ?>:</th>
   <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px"><span><?=$value ?></span></td>
</tr>
<?php } ?>


                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <p style="margin:0 0 16px"><?=$mail_footer ?></p>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>