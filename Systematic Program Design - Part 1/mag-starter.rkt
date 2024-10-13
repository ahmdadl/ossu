;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname mag-starter) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; Number -> String
;; product a function that takes a number and determines if it is pos or neg or zero

(check-expect (mag 5) "pos")
(check-expect (mag -7) "neg")
(check-expect (mag 0) "zero")

;(define (mag n) "zero") stub

#;
(define (mag n)
  (...n)
) ; template

(define (mag n)
  (cond
    [(> n 0) "pos"]
    [(< n 0) "neg"]
    [else "zero"]
    )
  )