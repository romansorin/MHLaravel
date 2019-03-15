<template>
    <div>
      <article class="card-calendar">
             <div class="container">
                 <div class="row card-calendar-date">
                    <p class="card-calendar-day">{{ events[0].date }}</p>
                     <p class="card-calendar-month">{{ events[0].month }}</p>
                </div>
                <div class="row card-calendar-info">
                   <h3 class="card-calendar-title">{{ events[0].title }}</h3>
                   <p class="card-calendar-description">{{ events[0].description }}</p>
               </div>
               <div class="row card-calendar-image">
                   <img :src="events[0].image" alt="#">
               </div>
            </div>
        </article>
    </div> 
</template>

<script>
    export default {
        name: "CalendarCard",
        data() {
            return {
                events: [{
                    id: 0,
                    date: 24,
                    month: "March",
                    title: "Lorem ipsum dolor.",
                    description: "In@#@#fo",
                    image: "https://images.pexels.com/photos/868097/pexels-photo-868097.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                }, {
                    id: 1,
                    date: 25,
                    month: "March",
                    title: "Lorem ipsum dolor.",
                    description: "In3434342fo",
                    image: "https://images.pexels.com/photos/1933873/pexels-photo-1933873.jpeg?cs=srgb&dl=adult-elderly-face-1933873.jpg&fm=jpg"
                }, {
                    id: 2,
                    date: 26,
                    month: "March",
                    title: "Lorem ipsum dolor.",
                    description: "Ifasfasfafnfo",
                    image: "https://images.pexels.com/photos/1933873/pexels-photo-1933873.jpeg?cs=srgb&dl=adult-elderly-face-1933873.jpg&fm=jpg"
                }]
            }
        },

    } 
</script>