<template>
    <div class="col-12">
        <article class="card-horizontal" id="one">
            <div class="container">
                <div class="row card-horizontal-meta">
                        <p class="card-horizontal-category">{{ data[0].category }}</p>
                        <h3 class="card-horizontal-title">{{ data[0].title }}</h3>
                </div>
                <div class="row card-horizontal-view">
                    <button type="button" class="btn btn-light card-horizontal-view-btn">View</button>
                </div>
            </div>
        </article>
    </div>
</template>

<script>
    let data = [
        {category: "VueJS", title: "This is a title, where I am trying to learn VueJS."}
    ];

    export default {
        name: "CardHorizontal",
        data () {
            return {data}
        }
    }
</script>
