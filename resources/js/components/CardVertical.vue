<template>
    <div class="col-12 col-lg-6">
        <article class="card-vertical" id="two">
            <div class="container">
                <div class="row card-vertical-meta">
                    <p class="card-vertical-category">{{ data[0].category }}</p>
                    <h3 class="card-vertical-title">{{ data[0].title }}</h3>
                </div>
                <div class="row card-vertical-view">
                    <button type="button" class="btn btn-light card-vertical-view-btn">View</button>
                </div>
            </div>
        </article>
    </div>
</template>

<script>
    let data = [
        {category: "Laravel", title: "A vertical version of this card — all for testing."}
    ];

    export default {
        name: "CardVertical",
        data () {
            return {data}
        }
    }
</script>
