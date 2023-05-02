<?php

require __DIR__ . '/../Controller/LinktreeItem.php';
require __DIR__ . '/../Controller/TopButtonItem.php';

$dev = new LinktreeItem('Developer', '', '/dev', 'developer', true);
$bamSystem = new LinktreeItem('BamSystem', '', '/bamsystem', 'group-item bamsystem circle-hover-translate-down', true);
$motion = new LinktreeItem('Portfolio', '', '/motion', 'group-item motion-designer circle-hover-translate-down', true);
$qimono = new LinktreeItem('Qimono', '', '/qimono', 'group-item qimono circle-hover-translate-down', true);
$motiontober = new LinktreeItem('Motiontober', '', '/mtb', 'group-item motiontober circle-hover-translate-down', true);

$cv = new TopButtonItem('CV', '/cv', 'cv');

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . '/./Home/head-content.php'; ?>
<body>
    <?php include __DIR__ . '/./Home/header-content.php'; ?>
    <main>
        <section class="linktree">
            
            <div class="top-buttons">
                <ul>
                    <?php echo $cv->getTopButton(); ?>
                    <li class="email"><a href="mailto:contact@maxdlr.com" class="fa fa-envelope fa-2x top-button-item"></a></li>
                    <li class="linkedin"><a href="https://www.linkedin.com/in/maximedlr/" class="fa fa-linkedin fa-2x top-button-item"></a></li>
                    <li class="github"><a href="https://github.com/maxdlr" class="fa fa-github fa-2x top-button-item"></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/qimono.tv/" class="fa fa-instagram fa-2x top-button-item"></a></li>
                </ul>
            </div>
            
            <div class="group-projects">
                <ul>
                    <p class="group-title">Dev projects</p>
                    <?php echo $bamSystem->getLinktreeItem(); ?>
                </ul>
            </div>

            <div class="group-projects">
                <ul>
                    <p class="group-title">Motion design projects</p>
                    <?php echo $motion->getLinktreeItem(); ?>
                    <?php echo $qimono->getLinktreeItem(); ?>
                    <?php echo $motiontober->getLinktreeItem(); ?>
                </ul>
            </div>
            <img class="front-walker" src="../../../assets/images/gifs/21_walk_maxdlr.gif" alt="animated walking thingy">
        </section>
    </main>
</body>
</html>