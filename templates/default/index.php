<?php
$age = date_diff(date_create('1990-10-18'), date_create())->y;
$resume = <<<EOF
{
  "data": {
    "type": "resume",
    "id": {$age},
    "attributes": {
      "name": "Oleg Belostotsky",
      "role": "full-stack web developer",
      "location": "Saint Petersburg, Russia",
      "technical skills": ["PHP", "JavaScript"],
      "education": {
        "National Research University ITMO": {
          "degree": "Specialist of Information Systems and Technologies",
          "faculty": "Information Technologies and Programming",
          "end date": "Jun/2013",
          "graduation work": "An Android application with the feature of data synchronization through the own custom web API."
        }
      }
    }
  }
}
EOF;
?>

<?php $title = 'Home'; ?>
<?php ob_start(); ?>
  <h1>GET /index.php</h1>
  <pre><code class="json"><?= $resume ?></code></pre>
<?php $content = ob_get_contents(); ?>
<?php ob_end_clean(); ?>

<?php require($this->kernel->getTemplateDir() . '/layout.php'); ?>
