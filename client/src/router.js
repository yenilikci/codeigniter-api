import Vue from "vue"
import VueRouter from "vue-router"
import Courses from "./components/ListCourse/Courses"
import NewCourse from "./components/NewCourse"
import UpdateCourse from "./components/NewCourse"

Vue.use(VueRouter)

export const router = new VueRouter({
    routes: [
        {
            path: "/",
            component: Courses
        },
        {
            path: "/new",
            component: NewCourse
        },
        {
            path: "/update",
            component: UpdateCourse
        },
        {
            path: "*",
            redirect: "/"
        }
    ],
    //mode: "hash"
    mode: "history"
})