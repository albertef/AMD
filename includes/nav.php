<nav id="navbar" class="main-nav ">
    <ul class="text-center">
        <li><a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About AMD</a></li>
        <li><a class="<?= ($activePage == 'courses' || $activePage == 'course-details') ? 'active':''; ?>" href="courses.php">Courses</a></li>
        <li><a class="<?= ($activePage == 'faculty') ? 'active':''; ?>" href="faculty.php">Faculty</a></li>
        <li><a class="<?= ($activePage == 'campus') ? 'active':''; ?>" href="campus.php">Creative Hub</a></li>
        <li><a class="<?= ($activePage == 'placements') ? 'active':''; ?>" href="placements.php">Placements</a></li>
        <li><a class="<?= ($activePage == 'powerhouse') ? 'active':''; ?>" href="powerhouse.php">Powerhouse</a></li>
        <!-- <li><a href="lifeatamd.php">Life@AMD</a></li> -->
        <li><a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Get In Touch</a></li>
    </ul>
</nav>