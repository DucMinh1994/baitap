
@extends('layout.master')

    @section('detail')
    <section class="tada-container content-posts page post-full-width">


        <!-- CONTENT -->
        <div class="content col-xs-12">

        
            <!-- ARTICLE 1 -->        
            <article>
                <div class="post-image">
                    <img src="{{asset($post->thumbnail)}}" alt="post image 1"> 
                </div>
                <div class="post-text">
                    <h2>{{$post->title}}</h2>
                </div>                 
                <div class="post-text text-content">                  
                    <div class="text"><p style="text-indent: 30px;">{{$post->description}}                
                    </p>                    
                    <div class="gallery">
                        <div class="item-gallery-left">
                            <img src="">
                            <img src="">
                        </div>
                        <div class="item-gallery-center">
                            <img src="{{asset($post->thumbnail)}}">
                        </div>  
                        <div class="item-gallery-right">    
                            <img src="">
                            <img src="">
                        </div>  
                            <div class="clearfix"></div> 
                    </div>
                    <ul class="bullet">
                        <li>{{$post->slug}}</li>
                        
                    </ul>
                    <p style="text-indent: 30px;">{{$post->content}}
                    </p>
                    
                    <div class="clearfix"></div>
                    </div>
                </div>
            
            
            </article>
        
        
        </div>
        
        <div class="clearfix"></div>
        
        
    </section>
    @endsection
