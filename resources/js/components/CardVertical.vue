<template>
    <div class="col-12 col-lg-6">
        <article class="card-vertical" id="two">
            <div class="container">
                <div class="row card-vertical-meta">
                    <p class="card-vertical-category">{{ data.category }}</p>
                    <h3 class="card-vertical-title">{{ data.title }}</h3>
                </div>
                <div class="row card-vertical-view">
                    <a :href="'/news/'+data.id"><button type="button" class="btn btn-light card-vertical-view-btn">View</button></a>
                </div>
            </div>
        </article>
    </div>
</template>

<script>
    export default {
        name: "CardVertical",
        props: ['data']
    }
</script>
