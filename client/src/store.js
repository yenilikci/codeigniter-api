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
        updateCourse(state, course) {
            let index = state.courses.findIndex(c => c.id === course.id)
            if (index > -1) {
                state.courses[index] = course
            }
        },
        deleteCourse(state, courseId) {
            let index = state.courses.findIndex(c => c.id === courseId)
            if (index > -1) {
                state.courses.splice(index, 1);
            }
        }
    },
    actions: {
        initApp(context) {
            axios.get("http://127.0.0.1/codeigniter-api/api/get_all_data")
                .then(response => {
                    //console.log(response)
                    context.commit("initCourses", response.data) //mutation set
                })
        },
        addCourseAction(context, course) {
            //db işlemleri yer alacak...
            return axios.post("http://127.0.0.1/codeigniter-api/api/save", JSON.stringify(course))
                .then(response => {
                    //course.id = response.data.insert_id
                    context.commit("addCourse", { id: response.data.insert_id, ...course })
                })

        },
        updateCourseAction(context, course) {
            //db işlemleri yer alacak...
            return axios.post("http://127.0.0.1/codeigniter-api/api/update", JSON.stringify(course))
                .then(() => {
                    context.commit("updateCourse", course)
                })
        },
        deleteCourseAction(context, courseId) {
            //db işlemleri yer alacak...
            return axios.post("http://127.0.0.1/codeigniter-api/api/delete", JSON.stringify({ id: courseId }))
                .then(() => {
                    context.commit("deleteCourse", courseId)
                })
        }
    },
    getters: {
        getCourses(state) {
            return state.courses
        }
    }
})

export default store