<style>
    .card-image {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background-color: #FFF;
        padding: 3px;
    }

    .card-image .card-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 0px solid #4070F4;
    }

    .body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #EFEFEF;
        font-family: 'popins',sans-serif;
    }

    .card {
        width: 320px;
        border-radius: 25px;
        background-color: #FFF;
    }
    .slide-content
    {
        margin: 0 40px;
    }
    .image-content
    {
        row-gap:5px ;
        position: relative;
        padding: 25px 0;
        
    }
    .image-content,
    .card-content
    {
padding:  14px ;
display: flex;
flex-direction: column;
align-items: center;
    }
    .name
    {
        font-size:18px ;
        font-weight: 500;
        color: #333;
    }
    .description
    {
        font-size: 14px;
        color: #707070;

    }
    .button
    {
        border: none;
        font-size: 16px;
        color: #FFF;
        padding: 8px 16px;
        background-color: #4070F4;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .button:hover
    {
        background-color: #265DF2;
    }
    .overlay
    {
        position: absolute;
        left: 0;
        right: 0;
        height: 100%;
        width:100%;
        background-color: #4070F4;
        border-radius: 25px 25px 0 25px;
    }
    .overlay::before,
    .overlay::after
    {
    content:'';
     position: absolute; 
     right: 0;
     bottom: -40px;
     height: 40px;
     width: 40px;
    background-color: #4070F4;
    }
    .overlay::after
    {
        border-radius:0 25px 0 0 ;
        background-color: #FFF;

    }
    .slide-container
    {
        max-width: 1120px;
        width: 100%;
        background-color: grey;
        padding: 40px 0;
    }
</style>
<section class="body">
    <div class="slide-container">
        <div class="slide-content">
            <div class="card-wrapper">
                <div class="card">
                    <div class="image-content">
                        <span class="overlay">

                        </span>
                        <div class="card-image">
                            <img src="international.jpg" alt="" class="card-img">
                        </div>

                    </div>
                    <div class="card-content">
                        <h2 class="name">
                            Touseef Ehsan

                        </h2>
                        <p class="description">
                            This is touseef Ehsan profile with 2 years of experience ,and have expertise with html css and javascript , and have strong knowledge in laravel .
                        </p>
                        <button class="button">view More</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>