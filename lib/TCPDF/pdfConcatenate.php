<?

require_once("tcpdf.php");
require_once("fpdi.php");

class pdfConcatenate extends FPDI {

    public function Footer() {}
    public function Header() {}

var $files = array();
function setFiles($files) {
$this->files = $files;
}
function concat() {
foreach($this->files AS $file) {
$pagecount = $this->setSourceFile($file);

for ($i = 1; $i <= $pagecount; $i++) {
$tplidx = $this->ImportPage($i);
$s = $this->getTemplatesize($tplidx);

if ($s['w'] < $s['h']) {
$this -> AddPage('P', array($s['w'], $s['h']));
} else {
$this -> AddPage('L', array($s['w'], $s['h']));
}

$this->useTemplate($tplidx);
}
}
}
}

?>