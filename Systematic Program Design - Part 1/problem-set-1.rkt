;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname problem-set-1) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
(require 2htdp/image)

(+ 2 3)
(* 6 5)

(* 3 (+ 2 1))

(sqr (+ 2 3))

(- 5.6 1.6)

(above
  (rectangle 120 10 "solid" "red")
  (rectangle 100 10 "solid" "blue")
  (rectangle 80 10 "solid" "yellow")
)

(define SQUARE (square 15 "solid" "green"))
(define SQUARE2 (square 10 "solid" "blue"))

(equal? SQUARE SQUARE2)

(define (larger a b)
  (if (> a b)
      a
      b)
  )

(larger 5 2)