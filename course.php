<?php include_once './include/header.php'; ?>
<!doctype html>
<html class="no-js" lang="en">



   <!-- main-area -->
    <main class="main-area fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h3 class="title">Our Courses</h3>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.php">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">All Courses</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- all-courses -->
        <section class="all-courses-area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-4 order-2 order-lg-0">
<!--                        <aside class="courses__sidebar">
                            <div class="shop-widget">
                                <h4 class="widget-title">Filter by Category</h4>
                                <div class="shop-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_1">
                                                <label class="form-check-label" for="cat_1">Art & Design (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_2">
                                                <label class="form-check-label" for="cat_2">Business (12)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_3">
                                                <label class="form-check-label" for="cat_3">Data Science (7)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_4">
                                                <label class="form-check-label" for="cat_4">Development (10)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_5">
                                                <label class="form-check-label" for="cat_5">Finance (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_6">
                                                <label class="form-check-label" for="cat_6">Health & Fitness (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_7">
                                                <label class="form-check-label" for="cat_7">Lifestyle (9)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_8">
                                                <label class="form-check-label" for="cat_8">Marketing (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_9">
                                                <label class="form-check-label" for="cat_9">Music (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_10">
                                                <label class="form-check-label" for="cat_10">Development (9)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget">
                                <h4 class="widget-title">Price Type</h4>
                                <div class="shop-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="price_1">
                                                <label class="form-check-label" for="price_1">All (1,550)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="price_2">
                                                <label class="form-check-label" for="price_2">Free (32)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="price_3">
                                                <label class="form-check-label" for="price_3">Premium (17)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget">
                                <h4 class="widget-title">Instructors</h4>
                                <div class="shop-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_1">
                                                <label class="form-check-label" for="ins_1">Kiran Molly (11)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_2">
                                                <label class="form-check-label" for="ins_2">Jackson Alive (12)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_3">
                                                <label class="form-check-label" for="ins_3">Oawe Alve (9)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_4">
                                                <label class="form-check-label" for="ins_4">Liakon Rivey (9)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_5">
                                                <label class="form-check-label" for="ins_5">Foley Patrik (9)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ins_6">
                                                <label class="form-check-label" for="ins_6">Kiran Molly (11)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget">
                                <h4 class="widget-title">Languages</h4>
                                <div class="shop-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_1">
                                                <label class="form-check-label" for="lang_1">China (7)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_2">
                                                <label class="form-check-label" for="lang_2">English (11)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_3">
                                                <label class="form-check-label" for="lang_3">French (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_4">
                                                <label class="form-check-label" for="lang_4">German (7)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_5">
                                                <label class="form-check-label" for="lang_5">Italian (3)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lang_6">
                                                <label class="form-check-label" for="lang_6">Spanish (4)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget">
                                <h4 class="widget-title">Difficulty Level</h4>
                                <div class="shop-cat-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_1">
                                                <label class="form-check-label" for="difficulty_1">All Levels (50)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_2">
                                                <label class="form-check-label" for="difficulty_2">Beginner (32)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_3">
                                                <label class="form-check-label" for="difficulty_3">Intermediate (17)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="difficulty_4">
                                                <label class="form-check-label" for="difficulty_4">Expert (2)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget">
                                <h4 class="widget-title">Ratings</h4>
                                <div class="shop-rating-list">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(5.0)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(4.1)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(3.2)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(2.1)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <div class="rating">
                                                    <ul class="list-wrap">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                        <li class="delete"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span>(1.2)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>-->
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop-top-wrap courses-top-wrap">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="shop-top-left">
                                        <p>We have taining programs for you</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-center justify-content-md-end align-items-center">
<!--                                        <div class="shop-top-right m-0 ms-md-auto">
                                            <select name="orderby" class="orderby">
                                                <option value="Default sorting">Default sorting</option>
                                                <option value="Sort by popularity">Sort by popularity</option>
                                                <option value="Sort by average rating">Sort by average rating</option>
                                                <option value="Sort by latest">Sort by latest</option>
                                                <option value="Sort by latest">Sort by latest</option>
                                            </select>
                                        </div>-->
                                        <ul class="nav nav-tabs courses__nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 1H2C1.44772 1 1 1.44772 1 2V6C1 6.55228 1.44772 7 2 7H6C6.55228 7 7 6.55228 7 6V2C7 1.44772 6.55228 1 6 1Z"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16 1H12C11.4477 1 11 1.44772 11 2V6C11 6.55228 11.4477 7 12 7H16C16.5523 7 17 6.55228 17 6V2C17 1.44772 16.5523 1 16 1Z"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M6 11H2C1.44772 11 1 11.4477 1 12V16C1 16.5523 1.44772 17 2 17H6C6.55228 17 7 16.5523 7 16V12C7 11.4477 6.55228 11 6 11Z"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16 11H12C11.4477 11 11 11.4477 11 12V16C11 16.5523 11.4477 17 12 17H16C16.5523 17 17 16.5523 17 16V12C17 11.4477 16.5523 11 16 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                                    <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 6C0.67 6 0 6.67 0 7.5C0 8.33 0.67 9 1.5 9C2.33 9 3 8.33 3 7.5C3 6.67 2.33 6 1.5 6ZM1.5 0C0.67 0 0 0.67 0 1.5C0 2.33 0.67 3 1.5 3C2.33 3 3 2.33 3 1.5C3 0.67 2.33 0 1.5 0ZM1.5 12C0.67 12 0 12.68 0 13.5C0 14.32 0.68 15 1.5 15C2.32 15 3 14.32 3 13.5C3 12.68 2.33 12 1.5 12ZM5.5 14.5H17.5C18.05 14.5 18.5 14.05 18.5 13.5C18.5 12.95 18.05 12.5 17.5 12.5H5.5C4.95 12.5 4.5 12.95 4.5 13.5C4.5 14.05 4.95 14.5 5.5 14.5ZM5.5 8.5H17.5C18.05 8.5 18.5 8.05 18.5 7.5C18.5 6.95 18.05 6.5 17.5 6.5H5.5C4.95 6.5 4.5 6.95 4.5 7.5C4.5 8.05 4.95 8.5 5.5 8.5ZM4.5 1.5C4.5 2.05 4.95 2.5 5.5 2.5H17.5C18.05 2.5 18.5 2.05 18.5 1.5C18.5 0.95 18.05 0.5 17.5 0.5H5.5C4.95 0.5 4.5 0.95 4.5 1.5Z" fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="row courses__grid-wrap row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author001.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #E8F9EF; color: #04BC53;">Graphic Design</a>
                                                <h5 class="title"><a href="#">Bigener Adobe Illustrator for
                                                Graphic Design</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 05</li>
                                                    <li><i class="flaticon-timer"></i> 12h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 35</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">$29.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.2)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author002.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #F7EEFA; color: #BC18E4;">Marketing</a>
                                                <h5 class="title"><a href="#">How to Market Yourself as a
                                                Coach or Consultant</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 08</li>
                                                    <li><i class="flaticon-timer"></i> 16h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 45</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">Free</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.8)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author003.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #FFF0F9; color: #FF109F;">Finance</a>
                                                <h5 class="title"><a href="#">Become a Certified JavaScript Web Developer</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 12</li>
                                                    <li><i class="flaticon-timer"></i> 19h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 60</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price"><del>$29.00</del>$12.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.7)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author004.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #FFF3D3; color: #F5B204;">Development</a>
                                                <h5 class="title"><a href="#">Web Development
                                                Fully Complete Guideline</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 08</li>
                                                    <li><i class="flaticon-timer"></i> 20h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 40</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">Free</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(5.0)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author002.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #F5F0FF; color: #560EF0;">Photography</a>
                                                <h5 class="title"><a href="#">Photography
                                                training for the Artist in you</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 10</li>
                                                    <li><i class="flaticon-timer"></i> 20h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 30</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price"><del>$29.00</del>$16.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.9)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb06.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author004.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #E8F9EF; color: #04BC53;">Graphic Design</a>
                                                <h5 class="title"><a href="#">The Complete Guide to the
                                                Global Markets</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 09</li>
                                                    <li><i class="flaticon-timer"></i> 16h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 30</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price"><del>$29.00</del>$16.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(5.0)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb07.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author001.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #FFF3D3; color: #F5B204;">Business</a>
                                                <h5 class="title"><a href="#">Bigener Adobe Illustrator for Graphic Design</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 19</li>
                                                    <li><i class="flaticon-timer"></i> 10h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 18</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">$19.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.8)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb08.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author002.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #DEF3FF; color: #0496E9;">Technology</a>
                                                <h5 class="title"><a href="#">Bigener Adobe Illustrator for Graphic Design</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 16</li>
                                                    <li><i class="flaticon-timer"></i> 12h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 19</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">$14.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.0)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb09.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author003.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #F5F0FF; color: #560EF0;">Web Design</a>
                                                <h5 class="title"><a href="#">Become a Certified JavaScript Web Developer</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 16</li>
                                                    <li><i class="flaticon-timer"></i> 12h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 19</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">$49.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.0)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb10.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author002.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #F7EEFA; color: #BC18E4;">Marketing</a>
                                                <h5 class="title"><a href="#">How to Market Yourself as a
                                                        Coach or Consultant</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 08</li>
                                                    <li><i class="flaticon-timer"></i> 16h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 45</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">Free</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.8)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb11.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author002.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #F5F0FF; color: #560EF0;">Photography</a>
                                                <h5 class="title"><a href="#">Photography
                                                        training for the Artist in you</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 10</li>
                                                    <li><i class="flaticon-timer"></i> 20h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 30</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price"><del>$29.00</del>$16.00</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(4.9)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb12.jpg" alt="img">
                                                </a>
                                                <div class="author">
                                                    <a href="#"><img src="assets/img/courses/course_author004.png" alt="img"></a>
                                                </div>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #FFF3D3; color: #F5B204;">Development</a>
                                                <h5 class="title"><a href="#">Web Development
                                                        Fully Complete Guideline</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 08</li>
                                                    <li><i class="flaticon-timer"></i> 20h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 40</li>
                                                </ul>
                                                <div class="courses__item-bottom">
                                                    <div class="course__price">
                                                        <h3 class="price">Free</h3>
                                                    </div>
                                                    <div class="courses__item-rating">
                                                        <i class="fas fa-star"></i>
                                                        <span class="rating-count">(5.0)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="pagination__wrap mt-30">
                                    <ul class="list-wrap">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                <div class="row courses__list-wrap row-cols-1">
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb01.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #E8F9EF; color: #04BC53;">Graphic Design</a>
                                                <h5 class="title"><a href="#">Bigener Adobe Illustrator for Graphic Design</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 05</li>
                                                    <li><i class="flaticon-timer"></i> 12h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 35</li>
                                                    <li>
                                                        <div class="courses__item-rating">
                                                            <i class="fas fa-star"></i>
                                                            <span class="rating-count">(4.2)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                <div class="courses__item-bottom">
                                                    <div class="author">
                                                        <a href="#">
                                                            <img src="assets/img/courses/course_author001.png" alt="img">
                                                        </a>
                                                        <a href="#">David Millar</a>
                                                    </div>
                                                    <div class="course__price">
                                                        <h3 class="price">$29.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb02.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #F7EEFA; color: #BC18E4;">Marketing</a>
                                                <h5 class="title"><a href="#">How to Market Yourself as a Coach or Consultant</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 08</li>
                                                    <li><i class="flaticon-timer"></i> 16h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 45</li>
                                                    <li>
                                                        <div class="courses__item-rating">
                                                            <i class="fas fa-star"></i>
                                                            <span class="rating-count">(4.8)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                <div class="courses__item-bottom">
                                                    <div class="author">
                                                        <a href="#"><img src="assets/img/courses/course_author002.png" alt="img"></a>
                                                        <a href="#">Luna Rose</a>
                                                    </div>
                                                    <div class="course__price">
                                                        <h3 class="price">Free</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb03.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #FFF0F9; color: #FF109F;">Finance</a>
                                                <h5 class="title"><a href="#">Become a Certified JavaScript Web Developer</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 12</li>
                                                    <li><i class="flaticon-timer"></i> 19h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 60</li>
                                                    <li>
                                                        <div class="courses__item-rating">
                                                            <i class="fas fa-star"></i>
                                                            <span class="rating-count">(4.7)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                <div class="courses__item-bottom">
                                                    <div class="author">
                                                        <a href="#"><img src="assets/img/courses/course_author003.png" alt="img"></a>
                                                        <a href="#">Mark Lassos</a>
                                                    </div>
                                                    <div class="course__price">
                                                        <h3 class="price"><del>$29.00</del>$12.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb04.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #FFF3D3; color: #F5B204;">Development</a>
                                                <h5 class="title"><a href="#">Web Development Fully Complete Guideline</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 08</li>
                                                    <li><i class="flaticon-timer"></i> 20h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 40</li>
                                                    <li>
                                                        <div class="courses__item-rating">
                                                            <i class="fas fa-star"></i>
                                                            <span class="rating-count">(5.0)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                <div class="courses__item-bottom">
                                                    <div class="author">
                                                        <a href="#"><img src="assets/img/courses/course_author004.png" alt="img"></a>
                                                        <a href="#">Sofia Ans</a>
                                                    </div>
                                                    <div class="course__price">
                                                        <h3 class="price">Free</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb05.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #F5F0FF; color: #560EF0;">Photography</a>
                                                <h5 class="title"><a href="#">Photography training for the Artist in you</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 10</li>
                                                    <li><i class="flaticon-timer"></i> 20h 00m</li>
                                                    <li><i class="flaticon-user-1"></i> 30</li>
                                                    <li>
                                                        <div class="courses__item-rating">
                                                            <i class="fas fa-star"></i>
                                                            <span class="rating-count">(4.9)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                <div class="courses__item-bottom">
                                                    <div class="author">
                                                        <a href="#"><img src="assets/img/courses/course_author002.png" alt="img"></a>
                                                        <a href="#">Rehana Mia</a>
                                                    </div>
                                                    <div class="course__price">
                                                        <h3 class="price"><del>$29.00</del>$16.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb06.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #E8F9EF; color: #04BC53;">Graphic Design</a>
                                                <h5 class="title"><a href="#">The Complete Guide to the Global Markets</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 09</li>
                                                    <li><i class="flaticon-timer"></i> 16h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 30</li>
                                                    <li>
                                                        <div class="courses__item-rating">
                                                            <i class="fas fa-star"></i>
                                                            <span class="rating-count">(5.0)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                <div class="courses__item-bottom">
                                                    <div class="author">
                                                        <a href="#"><img src="assets/img/courses/course_author004.png" alt="img"></a>
                                                        <a href="#">William D.</a>
                                                    </div>
                                                    <div class="course__price">
                                                        <h3 class="price"><del>$39.00</del>$18.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="courses__item-two shine__animate-item">
                                            <div class="courses__item-two-thumb">
                                                <a href="#" class="shine__animate-link">
                                                    <img src="assets/img/courses/course_thumb07.jpg" alt="img">
                                                </a>
                                            </div>
                                            <div class="courses__item-two-content">
                                                <a href="#" class="courses__item-tag" style="background-color: #FFF3D3; color: #F5B204;">Business</a>
                                                <h5 class="title"><a href="#">Bigener Adobe Illustrator for Graphic Design</a></h5>
                                                <ul class="courses__item-meta list-wrap">
                                                    <li><i class="flaticon-file"></i> 19</li>
                                                    <li><i class="flaticon-timer"></i> 10h 30m</li>
                                                    <li><i class="flaticon-user-1"></i> 18</li>
                                                    <li>
                                                        <div class="courses__item-rating">
                                                            <i class="fas fa-star"></i>
                                                            <span class="rating-count">(4.8)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                                <div class="courses__item-bottom">
                                                    <div class="author">
                                                        <a href="#"><img src="assets/img/courses/course_author001.png" alt="img"></a>
                                                        <a href="#">Arian Hok</a>
                                                    </div>
                                                    <div class="course__price">
                                                        <h3 class="price">$19.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav class="pagination__wrap mt-30">
                                    <ul class="list-wrap">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- all-courses-end -->

    </main>
    <!-- main-area-end -->


    <?php include_once './include/footer.php'; ?>
</body>
</html
