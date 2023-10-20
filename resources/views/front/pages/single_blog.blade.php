@extends('front.layouts.app')

@section('title','single blog')


@section('content')

<div class="main">
    <div class="about_banner_img"><img src="{{asset('front')}}/images/blog_single.jpg"  class="img-responsive" alt=""/></div>
      <div class="about_banner_wrap">
           <h1 class="m_11">Blog<span class="class_1">&nbsp;&nbsp; &gt;&nbsp;&nbsp;&nbsp;&nbsp; nostrud exerci tation ullamcorper suscipit lobortis </span></h1>
       </div>
       <div class="border"> </div>
       <div class="container">
       <div class="row single-top">
              <div class="col-md-8">
                <div class="blog_single_grid">
               <ul class="links_blog">
                   <h3><a href="blog_single.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed </a></h3>
                   <li><a href="#"><i class="blog_icon5"> </i><span>April 14, 2014</span></a> <div class="clear"></div></li>
                   <li><a href="#"><i class="blog_icon6"> </i><span>admin</span></a><div class="clear"></div></li>
                   <li><a href="#"><i class="blog_icon7"> </i><span>1206</span></a><div class="clear"></div></li>
                   <li><a href="#"><i class="blog_icon8"> </i><span>1206</span></a><div class="clear"></div></li>
                 </ul>
               <img src="{{asset('front')}}/images/blog_single1.jpg" class="img-responsive" alt=""/>
               <div class="blog_single_desc">
                 <p class="m_16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
                 <p class="m_17">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
                 <p class="m_16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
                 <p class="m_17">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure</p>
               </div>
               <ul class="social_blog">
                    <h3>Share</h3>
                  <li class="fb"><a href="#"><span> </span></a></li>
                  <li class="tw"><a href="#"><span> </span></a></li>
                  <li class="google_blog"><a href="#"><span> </span></a></li>
                  <li class="linkedin"><a href="#"><span> </span></a></li>
                  <div class="clear"></div>
              </ul>
              <ul class="comments">
                  <h4>10 Comments</h4>
                 <li>
                     <ul class="comment_head">
                         <h5>etus et&nbsp;&nbsp;&nbsp; <span class="m_21"><a href="#">26 April 2104, 15:20</a></span></h5> <div class="reply1"><i class="reply"> </i><span class="m_22"><a href="">Reply</a></span></div><div class="clear"></div>
                     </ul>
                     <i class="preview"> </i>
                     <div class="data">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus.</p>
                     </div>
                     <div class="clear"></div>
                 </li>
                 <ul class="comment_head">
                         <h5>etus et&nbsp;&nbsp;&nbsp; <span class="m_21"><a href="#">26 April 2104, 15:20</a></span></h5> <div class="reply1"><i class="reply"> </i><span class="m_22"><a href="">Reply</a></span></div><div class="clear"></div>
                     </ul>
                  <li class="middle">
                   <i class="preview"> </i>
                     <div class="data-middle">

                         <p>netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>
                     </div>
                     <div class="clear"></div>
                 </li>
                <ul class="comment_head">
                         <h5>etus et&nbsp;&nbsp;&nbsp; <span class="m_21"><a href="#">26 April 2104, 15:20</a></span></h5> <div class="reply1"><i class="reply"> </i><span class="m_22"><a href="">Reply</a></span></div><div class="clear"></div>
                     </ul>
                  <li>
                     <i class="preview"> </i>
                     <div class="data">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus..</p>
                     </div>
                     <div class="clear"></div>
                 </li>
                    <h4>Leave a comment</h4>
                 <form id="commentform">
                  <p class="comment-form-author"><label for="author">Name</label>
                     <input id="author" name="author" type="text" value="" size="30" aria-required="true">
                  </p>
                  <p class="comment-form-email">
                     <label for="email">Email</label>
                     <input id="email" name="email" type="text" value="" size="30" aria-required="true">
                  </p>
                  <p class="comment-form-url">
                     <label for="url">Website</label>
                     <input id="url" name="url" type="text" value="http://w3layouts.com" size="30">
                  </p>
                  <p class="comment-form-comment">
                     <label for="comment">Comment</label>
                     <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                  </p>
                 <p class="form-submit">
                    <input name="submit" type="submit" id="submit" value="Send">
                 </p>
                 <div class="clear"></div>
                </form>
               </ul>
             </div>
            </div>
            <div class="col-md-4">
                 <ul class="blog-list">
                   <h4>Categories</h4>
                   <li><a href="#">Events</a></li>
                   <li><a href="#">Aerobics</a></li>
                   <li><a href="#">Crossfit</a></li>
                   <li><a href="#">Spinning</a></li>
                   <li><a href="#">news</a></li>
                 </ul>
                 <ul class="recent-list">
                   <h4>Recent Posts</h4>
                   <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                   <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                   <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                   <li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
                 </ul>
                 <ul class="single_times">
                      <h3>Opening <span class="opening">Hours</span></h3>
                      <li><i class="calender"> </i><span class="week_class">Monday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Tuesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Wednesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Thrusday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Friday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Saturday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                      <li><i class="calender"> </i><span class="week_class">Sunday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
                  </ul>
                   <div class="course_demo">
                       <ul id="flexiselDemo3">
                         <li><img src="{{asset('front')}}/images/pic4.jpg" /><div class="desc">
                             <h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
                             <p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
                             <div class="coursel_list">
                                 <i class="heart1"> </i>
                                 <i class="like"> </i>
                             </div>
                             <div class="coursel_list1">
                                 <i class="twt"> </i>
                                 <i class="fb"> </i>
                             </div>
                             <div class="clear"></div>
                         </div></li>
                         <li><img src="{{asset('front')}}/images/pic5.jpg" /><div class="desc">
                             <h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
                             <p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
                             <div class="coursel_list">
                                 <i class="heart2"> </i>
                                 <i class="like1"> </i>
                             </div>
                             <div class="coursel_list1">
                                 <i class="twt"> </i>
                                 <i class="fb"> </i>
                             </div>
                             <div class="clear"></div>
                         </div></li>
                         <li><img src="{{asset('front')}}/images/pic4.jpg" /><div class="desc">
                             <h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
                             <p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
                             <div class="coursel_list">
                                 <i class="heart2"> </i>
                                 <i class="like1"> </i>
                             </div>
                             <div class="coursel_list1">
                                 <i class="twt"> </i>
                                 <i class="fb"> </i>
                             </div>
                             <div class="clear"></div>
                         </div></li>
                         <li><img src="{{asset('front')}}/images/pic5.jpg" /><div class="desc">
                             <h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
                             <p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
                             <div class="coursel_list">
                                 <i class="heart2"> </i>
                                 <i class="like1"> </i>
                             </div>
                             <div class="coursel_list1">
                                 <i class="twt"> </i>
                                 <i class="fb"> </i>
                             </div>
                             <div class="clear"></div>
                         </div></li>
                         <li><img src="{{asset('front')}}/images/pic4.jpg" /><div class="desc">
                             <h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
                             <p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
                             <div class="coursel_list">
                                 <i class="heart2"> </i>
                                 <i class="like1"> </i>
                             </div>
                             <div class="coursel_list1">
                                 <i class="twt"> </i>
                                 <i class="fb"> </i>
                             </div>
                             <div class="clear"></div>
                         </div></li>
                     </ul>
             <script type="text/javascript">
         $(window).load(function() {
             $("#flexiselDemo3").flexisel({
                 visibleItems: 4,
                 animationSpeed: 1000,
                 autoPlay: true,
                 autoPlaySpeed: 3000,
                 pauseOnHover: true,
                 enableResponsiveBreakpoints: true,
                 responsiveBreakpoints: {
                     portrait: {
                         changePoint:480,
                         visibleItems: 1
                     },
                     landscape: {
                         changePoint:640,
                         visibleItems: 2
                     },
                     tablet: {
                         changePoint:768,
                         visibleItems: 2
                     }
                 }
             });

         });
     </script>
     <script type="text/javascript" src="{{asset('front')}}/js/jquery.flexisel.{{asset('front')}}/js"></script>
   </div>
             <h3 class="m_14">Membership Prices</h3>
             <div class="members">
                <h4 class="m_3">25% Discount of for all members</h4>
                <p>Discount on services and <br>treatments at the GymBase for<br> all membership cards holders.</p>
                <div class="btn1">
                 <a href="#">More</a>
                </div>
              </div>
               <ul  class="blog-list1">
                  <h4>Tags</h4>
                     <li><a href="#">Web Design</a></li>
                     <li><a href="#">Html5</a></li>
                     <li><a href="#">Wordpress</a></li>
                     <li><a href="#">Logo</a></li>
                     <li><a href="#">Web Design</a></li>
                     <li><a href="#">Web Design</a></li>
                     <li><a href="#">Wordpress</a></li>
                     <li><a href="#">Web Design</a></li>
                     <li><a href="#">Html5</a></li>
                     <li><a href="#">Wordpress</a></li>
                     <li><a href="#">Logo</a></li>
                     <div class="clear"></div>
                 </ul>
                 <ul class="archive-list">
                   <h4>Archive</h4>
                     <li><a href="#">2014</a></li>
                     <li><a href="#">2013</a></li>
                     <li><a href="#">2012</a></li>
                 </ul>
                 <h3 class="m_15">Partner</h3>
                   <ul class="partner_blog">
                       <li><img src="{{asset('front')}}/images/p6.png" alt=""/></li>
                       <li><img src="{{asset('front')}}/images/p5.png" alt=""/></li>
                       <li><img src="{{asset('front')}}/images/p4.png" alt=""/></li>
                       <li><img src="{{asset('front')}}/images/p3.png" alt=""/></li>
                       <li><img src="{{asset('front')}}/images/p2.png" alt=""/></li>
                       <li><img src="{{asset('front')}}/images/p1.png" alt=""/></li>
                       <div class="clear"></div>
                   </ul>
                 </div>
             <div class="clear"></div>
           </div>
         </div>
       </div>


@endsection
