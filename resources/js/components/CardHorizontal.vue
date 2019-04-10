<template>
    <div class="col-12">
        <article class="card-horizontal" id="one">
            <div class="container">
                <div class="row card-horizontal-meta">
                        <p class="card-horizontal-category">{{ data.category }}</p>
                        <h3 class="card-horizontal-title">{{ data.title }}</h3>
                </div>
                <div class="row card-horizontal-view">
                    <a :href="'/news/' + data.title"><button type="button" class="btn btn-light card-horizontal-view-btn">View</button></a>
                </div>
            </div>
        </article>
    </div>
</template>

<script>
    export default {
        name: "CardHorizontal",
        props: ['data']
    }
</script>
