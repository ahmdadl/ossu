;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname coutdown-starter) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; CountDown is one of:
;; - false
;; - Natural[1, 10]
;; - true
;; interp.
;;   false            means it is not yet started
;;   Natural[1, 10]   means we going from 10 to one and whats left
;;   true             means we are complete
(define CD1 false) ; not started
(define CD2 9)     ; started
(define CD3 2)     ; almose done
(define CD4 true)  ; completed

(define (fn-for-countDown cd)
  (cond
      [(false? cd) (...)]
      [(and (number? cd) (>= cd 1) (<= cd 10) ) (...cd)]
      [(true? cd) (...)]
    )
)