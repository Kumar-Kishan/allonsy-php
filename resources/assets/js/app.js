
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('preference-card', require('./components/PreferenceCard.vue'));
Vue.component('profile-bar',require('./components/ProfileBar.vue'));
Vue.component('post-composer', require('./components/PostComposer.vue'));
Vue.component('form-component', require('./components/Form.vue'));
Vue.component('trending',require('./components/Trending.vue'));
Vue.component('suggestion-box',require('./components/SuggestionBox.vue'));
Vue.component('suggestion',require('./components/Suggestion.vue'));
Vue.component('news-feed',require('./components/NewsFeed.vue'));
Vue.component('post',require('./components/Post.vue'));
Vue.component('review',require('./components/Review.vue'));
Vue.component('company-cover',require('./components/CompanyCover.vue'));
Vue.component('star-rating', require('./components/StarRating.vue'));
Vue.component('gallery', require('./components/Gallery.vue'));
Vue.component('picture', require('./components/Picture.vue'));