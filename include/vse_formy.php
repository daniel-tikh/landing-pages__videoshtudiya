<!-- Форма "Арендовать студию" -->

<!--noindex-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (trim(@$_POST['captcha']) == '') {
    if ((trim(@$_POST['lsdf7B4c0' . date('Yz')]) != '')&&(trim(@$_POST['s1f3hdfs0' . date('Yz')]) != '')&&(trim(@$_POST['title' . date('Yz')]) != '')&&(trim(@$_POST['url' . date('Yz')]) != '')){
		// $to = 'info@evernice.ru';
    $to = 'schtudiavideorent@gmail.com';
      $headers = array(
        'Content-type: text/plain; charset=UTF-8',
        'From: Сообщение с вашего сайта <noreply@xn--b1aeadnd4b6aj2cze.xn--p1ai>',
      );
      $subject = array(
        'Сообщение с вашего сайта видеоштудия.рф',
      );
      $msg = array(
        'СООБЩЕНИЕ С ВАШЕГО САЙТА (запрос на аренду студии)',
        '',
        ''.$_POST['lsdf7B4c0' . date('Yz')],
        ''.$_POST['s1f3hdfs0' . date('Yz')],
        '',
        'Сообщение отправлено со страницы «'.$_POST['title' . date('Yz')].'»',
        '('.$_POST['url' . date('Yz')].')',
      );

    @mail($to, implode("\r\n", $subject), implode("\r\n", $msg), implode("\r\n", $headers)."\r\n");
      echo ('<div id="respuesta"><p><strong>Ваша&nbsp;заявка успешно отправлена!</strong><br>Наш&nbsp;менеджер свяжется с&nbsp;вами&nbsp;в&nbsp;ближайшее время!</p></div>');
    }
  } }
?>
<!--/noindex-->

<!-- Форма в блоке с контактной информацией -->

<!--noindex-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (trim(@$_POST['captcha']) == '') {
    if ((trim(@$_POST['lsdf7B4c1' . date('Yz')]) != '')&&(trim(@$_POST['s1f3hdfs1' . date('Yz')]) != '')&&(trim(@$_POST['sd4e5gQf1' . date('Yz')]) != '')&&(trim(@$_POST['title' . date('Yz')]) != '')&&(trim(@$_POST['url' . date('Yz')]) != '')){
		// $to = 'info@evernice.ru';
    $to = 'schtudiavideorent@gmail.com';
      $headers = array(
        'Content-type: text/plain; charset=UTF-8',
        'From: Сообщение с вашего сайта <noreply@xn--b1aeadnd4b6aj2cze.xn--p1ai>',
      );
      $subject = array(
        'Сообщение с вашего сайта видеоштудия.рф',
      );
      $msg = array(
        'СООБЩЕНИЕ С ВАШЕГО САЙТА (заполнена онлайн форма обратной связи в блоке «Контактная информация»)',
        '',
        ''.$_POST['lsdf7B4c1' . date('Yz')],
        ''.$_POST['s1f3hdfs1' . date('Yz')],
        ''.$_POST['sd4e5gQf1' . date('Yz')],
        '',
        'Сообщение отправлено со страницы «'.$_POST['title' . date('Yz')].'»',
        '('.$_POST['url' . date('Yz')].')',
      );

    @mail($to, implode("\r\n", $subject), implode("\r\n", $msg), implode("\r\n", $headers)."\r\n");
      echo ('<div id="respuesta"><p><strong>Ваша&nbsp;заявка успешно отправлена!</strong><br>Наш&nbsp;менеджер свяжется с&nbsp;вами&nbsp;в&nbsp;ближайшее время!</p></div>');
    }
  } }
?>
<!--/noindex-->
