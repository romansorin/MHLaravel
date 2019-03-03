<template>
    <div>
        <div class="glider-track" v-for="post in posts">
            <div class="col-3">
                <article class="card-calendar">
                    <div class="container">
                        <div class="row card-calendar-date">
                            <p class="card-calendar-day">{{ post.date }}</p>
                            <p class="card-calendar-month">{{ post.month }}</p>
                        </div>
                        <div class="row card-calendar-info">
                            <h3 class="card-calendar-title">{{ post.title }}</h3>
                            <p class="card-calendar-description">{{ post.description }}</p>
                        </div>
                        <div class="row card-calendar-image">
                            <img src="#" alt="#a">
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CalendarCard",
        data() {
            return {
                posts: [
                    {id: 0, date: 24, month: 'February', title: "Title", description: "In@#@#fo"},
                    {
                        id: 1, date: 25,
                        month: 'January',
                        title: "Title",
                        description: "In3434342fo"
                    },
                    {id: 2, date: 26, month: 'February', title: "Titsdasdle", description: "Ifasfasfafnfo"},
                    {id: 3, date: 27, month: 'February', title: "Tissssfagwegtle", description: "Insdasdasdaafo"},
                    {id: 4, date: 28, month: 'February', title: "Tiadatle", description: "Inaaaasdsfo"},

                ]
            }
        },

    }
</script>
