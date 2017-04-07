<div class="blog-img pos-rltv product-overlay">
    <a href="/blog/<?=$item['id']?>"><img src="/views/clothing/images/blog/<?=$item['image']?>" alt=""></a>
</div>
<div class="blog-content">
    <div class="blog-title">
        <h5 class="uppercase font-bold"><a href="/blog/<?=$item['id']?>"><?=$item['title']?></a></h5>
        <div class="like-comments-date">
            <ul>
                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i><?=@$item['likes']?> Like</a></li>
                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i><?=@$item['comments']?> Comments</a></li>
                <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i><?=$item['date_publication']?></a></li>
            </ul>
        </div>
        <div class="blog-text">
            <p><?=$item['small_description']?></p>
        </div> <a class="read-more montserrat" href="/blog/<?=$item['id']?>">Read More</a> </div>
</div>