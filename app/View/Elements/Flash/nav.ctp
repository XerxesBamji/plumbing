<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
  <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle" style="color:white;background-color:#222;">
      <i class="fa fa-times"></i>
    </a>
    <li class="sidebar-brand">
      <a class="js-scroll-trigger" href="#top"><?php echo $this->Html->image('ATP_Logo(Final).png', array('width' => '12%'));?> All Time Plumbing</a>
    </li>
    <li>
      <a class="js-scroll-trigger" href="#top">Home</a>
    </li>
    <li>
      <a class="js-scroll-trigger" href="#about">About Us</a>
    </li>
    <li>
      <a class="js-scroll-trigger" href="#services">Services</a>
    </li>
    <li>
      <a class="js-scroll-trigger" href="#gallery">Gallery</a>
    </li>
    <li>
      <a class="js-scroll-trigger" href="#contact" onclick=$( "#menu-close").click();>Contact</a>
    </li>
  </ul>
</nav>
