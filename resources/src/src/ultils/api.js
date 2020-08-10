import axios from 'axios';

const SERVER_BASE_URL = process.env.APP_URL;
const http = axios.create({
    headers: {
        'Content-Type' : 'application/json'
    }
});

const postRequest = function (url, data, resolve, reject) {
    const requestUrl = SERVER_BASE_URL + url;
    http
    .post(requestUrl, data)
    .then(res => {
        resolve(res);
    })
    .catch(error => {
        reject(error);
    });
};

const getRequest = function (url, resolve, reject) {
    const requestUrl = SERVER_BASE_URL + url;
    http
    .get(requestUrl)
    .then(res => {
        resolve(res);
    })
    .catch(error => {
        reject(error);
    });
};

const putRequest = function (url, data, resolve, reject) {
    const requestUrl = SERVER_BASE_URL + url;
    http
    .get(requestUrl, data)
    .then(res => {
        resolve(res);
    })
    .catch(error => {
        reject(error);
    });
};

const patchRequest = function (url, data, resolve, reject) {
    const requestUrl = SERVER_BASE_URL + url;
    http
    .post(requestUrl, data)
    .then(res => {
        resolve(res);
    })
    .catch(error => {
        reject(error);
    });
};

const deleteRequest = function (url, resolve, reject) {
    const requestUrl = SERVER_BASE_URL + url;
    http
    .get(requestUrl)
    .then(res => {
        resolve(res);
    })
    .catch(error => {
        reject(error);
    });
};
