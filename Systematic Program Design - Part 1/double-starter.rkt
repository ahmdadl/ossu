;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname double-starter) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; Number -> Number
;; reporduce number by 2 (Number *2)
;; (define (double n) 0)

(check-expect (double 2) 4)
(check-expect (double 5) 10)

(define (double n) 
    (* n 2)
)