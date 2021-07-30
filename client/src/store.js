import Vue from "vue"
import Vuex from "vuex"
import axios from "axios"

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        courses: []
    },
    mutations: {
        initCourses(state, courses) {
            state.courses = courses
        },
        addCourse(state, course) {
            state.courses.push(course)
        },
        /*
        updateCourse(state, course) { },
        deleteCourse(state, courseId) { }
        */
    },
    actions: {
        initApp(context) {
            axios.get("http://127.0.0.1/codeigniter-api/api/get_all_data")
                .then(response => {
                    //console.log(response)
                    context.commit("initCourses", response.data) //mutation set
                })
        },
        /*
        addCourseAction(context, course) {

        },
        updateCourseAction(context, course) {

        },
        deleteCourseAction(context, courseId) {

        }
        */
    },
    getters: {
        getCourses(state) {
            return state.courses
        }
    }
})

export default store