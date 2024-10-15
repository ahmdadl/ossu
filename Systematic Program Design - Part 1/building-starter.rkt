;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname building-starter) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; Data definetions

;; Building
;; Natural[1, 50]
;; interp. number of bulding

(define B1 1)
(define B2 20)
(define B3 50)

(check-expect (getBu 5) 5)
(check-expect (getBu 6) 6)

(define (getBu n)
  (+ n 0)
)