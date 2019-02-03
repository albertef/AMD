<nav id="navbar" class="main-nav ">
    <ul class="text-center">
        <li><a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About AMD</a></li>
        <li><a class="<?= ($activePage == 'courses' || $activePage == 'course-details') ? 'active':''; ?>" href="courses.php">Courses</a></li>
        <li><a class="<?= ($activePage == 'faculty') ? 'active':''; ?>" href="faculty.php">Faculty</a></li>
        <li><a class="<?= ($activePage == 'campus') ? 'active':''; ?>" href="campus.php">Campus</a></li>
        <li><a class="<?= ($activePage == 'placements') ? 'active':''; ?>" href="placements.php">Placements</a></li>
        <li><a class="<?= ($activePage == 'powerhouse') ? 'active':''; ?>" href="powerhouse.php">Power House</a></li>
        <!-- <li><a href="lifeatamd.php">Life@AMD</a></li> -->
        <li><a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact Us</a></li>
    </ul>
</nav>