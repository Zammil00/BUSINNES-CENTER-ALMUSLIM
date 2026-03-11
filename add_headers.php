<?php
$files = glob(__DIR__.'/file/*_view.php');

foreach ($files as $file) {
    if (basename($file) === 'menu_laporan.php') continue;

    $content = file_get_contents($file);
    if (strpos($content, 'class="card-header"') !== false) continue;

    $base = basename($file, '_view.php');
    $form_file = $base . '_form';
    $title = ucwords(str_replace('_', ' ', $base));

    $add_btn = '<a href="index.php?file='.$form_file.'" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data '.$title.'</a>';

    $header_html = "
<div class=\"card-header\" style=\"margin-bottom: 20px;\">
    <h2 style=\"color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;\">Data {$title}</h2>
    {$add_btn}
</div>
";
    $content = preg_replace('/(\?>\s*)(<table class="tabel-data">)/s', '$1' . $header_html . '$2', $content, 1);
    $content = str_replace('<table class="tabel-data">', '<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">', $content);
    $content = str_replace('</table></td>', '</table></div></td>', $content);
    $content = str_replace('</table>', '</table></div>', $content);

    file_put_contents($file, $content);
    echo "Modernized $base view.\n";
}

$formFiles = glob(__DIR__.'/file/*_form.php');
foreach ($formFiles as $file) {
    $content = file_get_contents($file);
    if (strpos($content, 'class="form-wrapper"') !== false) continue;
    
    $base = basename($file, '_form.php');
    $title = ucwords(str_replace('_', ' ', $base));
    
    $wrap_start = "
<div class=\"form-wrapper\" style=\"background:#fff; padding:30px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.05); max-width:800px; margin:0 auto;\">
    <h2 style=\"color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:20px;\">Form Input {$title}</h2>
";
    $wrap_end = '</div>';

    $content = preg_replace('/(<form.*?>)/i', $wrap_start . '$1', $content, 1);
    if (preg_match('/<\/form>/i', $content)) {
        $content = preg_replace('/(<\/form>)/i', '$1' . "\n" . $wrap_end, $content, 1);
    } else {
        $content .= "\n" . $wrap_end;
    }

    file_put_contents($file, $content);
    echo "Wrapped $base form.\n";
}
echo "Done.";
?>

